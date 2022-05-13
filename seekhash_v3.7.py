import sys
import re
from guesslang import Guess
from collections import Counter

guess = Guess()

#-- Hash library function
def hash_library(lang):

    #--1--: Python
    hashes = []
    ## Hashes are retrieved from Python Hashlib package
    if lang == "Python":
        hashes = ['sha1',
                'sha224',
                'sha256',
                'sha384',
                'sha512',
                'blake2b',
                'blake2s',
                'md5',
                'sha3_224',
                'sha3_256',
                'sha3_384',
                'sha3_512',
                'shake_128',
                'shake_256']

    #--2--: Java
    ## Hashes are retrieved from java.security.MessageDigest
    if lang == "Java":
      hashes = ['md5',
                'sha-1',
                'sha-256']

    #--3--: C++
    ## Hashes are retrieved from namespace CryptoPP
    if lang == "C++":
      hashes = ['sha1',
                'sha256',
                'sha384',
                'sha512',
                'sha224',
                'sha3_256',
                'sha3_512',
                'sha128',
                'md5',
                'blake2s',
                'blake2b',
                'keccak_224',
                'keccak_256',
                'keccak_384',
                'keccak_512',
                'shake128',
                'shake256',
                'sm3',
                'tiger',
                'whirpool',
                'ripemd160',
                'ripemd320']

    #--4--: Solidity
    ## Hashes are built-in
    if lang == "Solidity":
      hashes = ['keccak256',
                'sha256',
                'ripemd160']

    #--5--: Golang
    ## Hashes are built-in
    if lang == "Go":
      hashes = ['type hash',
                'type hash32',
                'type hash64']

    return hashes

#-- Hash strength function
def hash_length(lang):
    hashStrengthDict = {}
    #--1--: Python
    if lang == "Python":
      hashStrengthDict = {'sha1'      : 160,
                          'sha224'    : 224,
                          'sha256'    : 256,
                          'sha384'    : 384,
                          'sha512'    : 512,
                          'blake2b'   : 128,
                          'blake2s'   : 256,
                          'md5'       : 128,
                          'sha3_224'  : 448,
                          'sha3_256'  : 512,
                          'sha3_384'  : 768,
                          'sha3_512'  : 1024,
                          'shake_128' : 512,
                          'shake_256' : 1024}

    #--2--: Java
    ## Hashes are retrieved from java.security.MessageDigest
    if lang == "Java":
      hashStrengthDict = {'md5'     : 128,
                          'sha-1'   : 160,
                          'sha-256' : 256}

    #--3--: C++
    ## Hashes are retrieved from namespace CryptoPP
    if lang == "C++":
      hashStrengthDict = {'sha1'      : 160,
                          'sha256'    : 256,
                          'sha384'    : 384,
                          'sha512'    : 512,
                          'sha224'    : 224,
                          'sha3_256'  : 256,
                          'sha3_512'  : 512,
                          'sha128'    : 128,
                          'md5'       : 128,
                          'blake2s'   : 256,
                          'blake2b'   : 128,
                          'keccak_224': 224,
                          'keccak_256': 256,
                          'keccak_384': 384,
                          'keccak_512': 512,
                          'shake128'  : 128,
                          'shake256'  : 256,
                          'sm3'       : 256,
                          'tiger'     : 192,
                          'whirpool'  : 512,
                          'ripemd160' : 160,
                          'ripemd320' : 320}

    #--4--: Soliditity
    ## Hashes are built-in
    if lang == "Solidity":
      hashStrengthDict = {'keccak256': 256 ,
                          'sha256'   : 256,
                          'ripemd160': 160}

    #--5--: Golang
    ## Hashes are built-in
    if lang == "Go":
      hashStrengthDict = {'hash'  : 0,
                          'hash32': 32,
                          'hash64': 64}

    return hashStrengthDict

#-- Find digital signature function
def find_digsig(lang, script):

    digitalSignature = " "

    #--1--: Python
    if lang == "Python":

        # - In-built-library
        EdDSAlist = ["modp_inv", "sign", "verify"]
        Ed25519list = ["ed25519", "sign", "verify"]
        DSAlist = ["dsa", "dss", "sign", "verify"]
        ElGamallist = ["elgamal", "gcd", "sign", "verify"]
        schnorrlist = ["schnorr_sign","schnorr_lib", "sign"]
        ECDSAlist = ["ecdsa", "sign", "verify"]
        RSAlist = ["rsa", "sign", "verify"]

        if all(x in script for x in EdDSAlist):
            digitalSignature = "Edwards-curve Digital Signature Algorithm(EdDSA)"

        if all(x in script for x in Ed25519list):
            digitalSignature = "Ed25519 signing"

        if all(x in script for x in DSAlist):
            digitalSignature = "Digital Signature Algorithm (DSA)"

        if all(x in script for x in ElGamallist):
            digitalSignature = "ElGamal"

        if all(x in script for x in schnorrlist):
            digitalSignature = "Schnorr Signature"

        if all(x in script for x in RSAlist):
            digitalSignature = "RSA"


    #--2--: Java
    if lang == "Java":

        # - In-built-library
        ECDSAlist = ['getinstance("ec")', "withecdsa"]
        Ed25519list = ['getInstance("Ed25519")', "sign"]
        DSAlist = ["withdsa", "sign", "verify"]
        RSAlist = ['getinstance("rsa")', "sign", "verify"]

        if all(x in script for x in ECDSAlist):
            digitalSignature = "ECDSA(Elliptic Curve Digital Signatures Algorithm)"

        if all(x in script for x in Ed25519list):
            digitalSignature = "Ed25519 signing"

        if all(x in script for x in DSAlist):
            digitalSignature = "Digital Signature Algorithm (DSA)"

        if all(x in script for x in RSAlist):
            digitalSignature = "RSA"

    #--3--: C++
    if lang == "C++":

        # - In-built-library
        ECDSAlist = ["ckecc", "ecdsa", "sign", "verify"]
        DSAlist = ["ckdsa","dsa", "sign", "verify"]
        Ed25519list = ['ckeddsa', "eddsa", "verify"]
        RSAlist = ["invertiblersafunction", "signmessage", "verifymessage"]

        if all(x in script for x in ECDSAlist):
            digitalSignature = "ECDSA(Elliptic Curve Digital Signatures Algorithm)"

        if all(x in script for x in DSAlist):
            digitalSignature = "Digital Signature Algorithm (DSA)"

        if all(x in script for x in Ed25519list):
            digitalSignature = "Ed25519 signing"

        if all(x in script for x in RSAlist):
            digitalSignature = "RSA"

    #--4--: Solidity
    if lang == "Solidity":

        # - In-built-library
        smartContractlist= ['ecrecover', "sign", "verify"]

        if all(x in script for x in smartContractlist):
            digitalSignature = "Smart Contract"

    #--5--: Golang
    ## Hashes are built-in
    if lang == "Go":

        # - In-built-library
        ECDSAlist = ["ecdsasignverify", "sign", "verify"]
        Ed25519list = ['crypto/ed25519', "ed25519", "sign","verify"]
        RSAlist = ["rsa", "signpss", "verifypss"]

        if all(x in script for x in ECDSAlist):
            digitalSignature = "ECDSA(Elliptic Curve Digital Signatures Algorithm)"

        if all(x in script for x in Ed25519list):
            digitalSignature = "Ed25519 signing"

        if all(x in script for x in RSAlist):
            digitalSignature = "RSA"

    return digitalSignature

#-- Check programming language if file extension is
#-- 1. ".txt" (normal text file)
#-- 2. ".c" (Because Golang and C have the same extension)
def guess_language(file):
    with open(file,'r') as readFile:
        data = readFile.read()
        name = guess.language_name(data)
        prob = guess.probabilities(data)
        #print(name)
    return name, prob

# detect solidity
def detectSolidity(script):
    language = ""
    prob = ""
    wordCount = 0
    uniqueTXT = ""

    solList = ["contract", "uint", "fixed", "unfixed", "fixedMxN",
               "ufixedMxN", "address", "wei", "szabo", "finney", "ether",
               "pure returns", "blockhash", "block.coinbase", "block.difficulty",
               "block.gaslimit", "block.number", "block.timestamp", "gasleft",
               "msg.data", "msg.sender", "msg.sig", "msg.value", "now", "tx.gasprice",
               "tx.origin"]

    with open(script,'r') as readFile:
        data = readFile.read()
        # Change all the data to lowercase
        contents = data.lower()
        # split the data by " "
        contents = contents.split(" ")
        # Create a dictonary and count their frequency
        UniqueWord = Counter(contents)
        # joins two adjacent elemments in iterable way
        uniqueTXT = " ".join(UniqueWord.keys())

    if "pragma solidity" in uniqueTXT:
        language = "Solidity"
        prob = "1"

    elif (language == "" and prob == ""):
        for x in solList:
            if x in uniqueTXT:
                wordCount += 1
        if wordCount >= 3:
            language = "Solidity"
            prob = "Above 95%"
    else:
        language = ""
        prob = ""

    return language, prob

# detect python
def detectPython(script):
    language = ""
    prob = ""
    wordCount = 0
    uniqueTXT = " "

    pyList = ["def", "__init__", "self.", "import hashlib", "else:", "#",
              "elif", "elif:", "hexdigest", "with open", "try:", "print",
              "crypto.publicKey","crypto.hash", "crypto.signature", "from", "break"]

    with open(script,'r') as readFile:
        data = readFile.read()
        # Change all the data to lowercase
        contents = data.lower()
        # split the data by " "
        contents = contents.split(" ")
        # Create a dictonary and count their frequency
        UniqueWord = Counter(contents)
        # joins two adjacent elemments in iterable way
        uniqueTXT = " ".join(UniqueWord.keys())

    for x in pyList:
        if x in uniqueTXT:
            wordCount += 1

    if wordCount >= 3:
        language = "Python"
        prob = "Above 95%"
    else:
        language = ""
        prob = ""

    return language, prob

#-- Finding of hash functions within script
def find_HashFunction(script, hashes):
    output = ""
    for x in hashes:
        lookup = x
        with open(script, 'r') as SrcFile:
            for num, line in enumerate(SrcFile, 1):
                line = line.lower()
                if lookup in line:
                    displays = f'{num}: {lookup},'
                    output += displays
    return output

#-- Checking if its text file
def check_txt(script):
    textFile = False
    if ".txt" in script[-4:]:
        textFile = True
    return textFile

#-- Checking for file extension
def check_ext(script):
    language = ""
    prob = "1"
    if ".py" in script[-3:]:
        language = "Python"
    elif ".java" in script[-5:]:
        language = "Java"
    elif ".cpp" in script[-4:]:
        language = "C++"
    elif ".c" in script[-5:]:
        language = guess_language(script)
    elif ".sol" in script[-4:]:
        language = "Solidity"
    return language, prob

#-- Compute the hash strength
def compute_strength(hashLength):
  hashStrength = " "

  if hashLength < 256:
    hashStrength = "Weak"
  elif hashLength == 256:
    hashStrength = "Strong"
  elif hashLength >= 256:
    hashStrength = "Very Strong"

  return hashStrength

def platform(lang):

    platforms = []
    output = ""

    if lang == "Python":
        platforms = ["Ethereum",
                     "Hyperledger Fabric",
                     "Steem",
                     "NEO"]

    if lang == "Java":
        platforms = ["Ethereum",
                     "IOTA",
                     "NEM",
                     "Hyperledger Fabric",
                     "NEO"]

    if lang == "C++":
        platforms = ["Bitcoin",
                     "Ripple",
                     "Litecoin",
                     "Monero",
                     "EOS",
                     "Stellar",
                     "QTUM"]

    if lang == "Solidity":
        platforms = ["Ethereum"]

    if lang == "Go":
        platforms = ["Ethereum",
                     "Hyperledger Fabric",
                     "Dero",
                     "GoChain"]

    for platform in platforms:
            if platform == platforms[-1]:
                output += platforms[-1]
            else:
                output += platform
                output += ", "
    return output

def main():

    past_Attacks = { 'md2' : 'MD2 is considered a weak hash, superseded by MD5(Weak against collisions) ',
                     'md4' : 'MD4 is considered a weak hash, superseded by MD5(Weak against collisions)',
                     'md5' : 'MD5 is weak against collision resistance, prefix collision attacks, pre-image resistance attacks(theory) and length extension attacks',
                     'sha1': 'SHA-1 is weak against collision resistance, length extension attacks and prefix collision attacks, it is superseded by SHA-2 & SHA-3',
                     'ripemd' : 'RIPEMD is weak against collision resistance',
                     'sha0' : 'SHA-0 is weak against collision resistance and is superseded by SHA-2 & SHA-3'
                    }
    past_attacks_done = []

    #-1- Script input
    script = sys.argv[1]
    hashLengthDict = {}
    digitalSignature = " "
    outputTxt = ""
    language = ""
    prob = ""

    outputTxt += script + ";"

    #-2- Check if script is ".txt", otherwise check what language is it
    # If True, its .txt extension, if False, check script extension.
    if check_txt(script) == True:

        # detect solidtity language
        language, prob = detectSolidity(script)

        # if solidity not detected
        if(language == "" and prob == ""):
            # detect python language
            language, prob = detectPython(script)

        # if solidity and python not detected
        if(language == "" and prob == ""):
            language, prob = guess_language(script)
    else:
        language, prob = check_ext(script)

    if (language == "Python" or language == "Solidity"):
        first_prob = prob
    elif prob == "1":
        first_prob = "1"
    else:
        first_prob = str(round(prob[0][1],3))

    outputTxt += language + ";"
    output = platform(language)
    outputTxt += f"{output};"
    outputTxt += first_prob +";"

    #print(first_prob)

    #-3- Read the contents from script
    with open(script) as f:
        scriptContent = f.read()
        contents = scriptContent.lower()

    #-4- Getting the hash functions from hash library based on the programming language
    hashes = hash_library(language)

    #-5- Single out the hash functions within the script
    hashesFound = find_HashFunction(script, hashes)
    hashesFound = hashesFound[:-1]
    hashesFound += ";"

    #print(hashesFound)
    outputTxt += hashesFound

    #-6- Find the hash length and output the hash strength
    hashLengthDict = hash_length(language)
    found_array = []
    for hash_found in hashesFound.split():
        for Dict_key in hashLengthDict.keys():
            if Dict_key in hash_found and Dict_key not in found_array:
                found_array.append(Dict_key)
                outputTxt += "{}-{}bits,".format(Dict_key.upper(), hashLengthDict[Dict_key])
    outputTxt += ";"

    #-7- Find digital signature used in the programming language
    digitalSignature = find_digsig(language, contents)
    # print("Digital Signature: " + digitalSignature)

    outputTxt = outputTxt[:-1]
    outputTxt += ';'
    outputTxt += digitalSignature
    #print("Output file is stored in report.txt")

    #-8- Output the report to user (using print())
    print(outputTxt)

if __name__ == '__main__':
    main()
