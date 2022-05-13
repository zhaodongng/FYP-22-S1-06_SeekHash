package main

import (
	"crypto/ed25519"

	"encoding/base64"
	"fmt"
	"os"
)

func Base64Encode(message []byte) []byte {
	b := make([]byte, base64.StdEncoding.EncodedLen(len(message)))
	base64.StdEncoding.Encode(b, message)
	return b
}

func main() {

	msg := "Hello 123"

	argCount := len(os.Args[1:])
	if argCount > 0 {
		msg = os.Args[1]
	}

	publ, priv, _ := ed25519.GenerateKey((nil))

	m := []byte(msg)

	sig := ed25519.Sign(priv, m)

	fmt.Printf("=== Message ===\n")
	fmt.Printf("Msg: %s\nHash: %x\n", msg, m)
	fmt.Printf("\n=== Public key ===\n")
	fmt.Printf("Public key: %x\n", publ)
	fmt.Printf("   Public key (Base64): %s\n", Base64Encode(publ))
	fmt.Printf("\n=== Private key ===\n")
	fmt.Printf("Private key: %x\n", priv[0:32])
	fmt.Printf("   Private key (Base64): %s\n", Base64Encode(priv[0:32]))
	fmt.Printf("   Private key (Base64) Full key: %s\n", Base64Encode(priv))
	fmt.Printf("   Private key (Full key): %x\n", priv)
	fmt.Printf("\n=== Signature (R,s) ===\n")
	fmt.Printf("Signature: R=%x s=%x\n", sig[0:32], sig[32:64])
	fmt.Printf("   Signature (Base64)=%s\n\n", Base64Encode(sig))

	rtn := ed25519.Verify(publ, m, sig)

	if rtn {
		fmt.Printf("Signature verifies")
	} else {
		fmt.Printf("Signature does not verify")
	}
}
