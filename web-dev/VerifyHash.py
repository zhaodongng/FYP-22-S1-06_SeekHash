import re
import sys

def compile_re(string):
    return re.compile(r"^" + string + r"$", re.IGNORECASE)

HASH_TYPE_REGEX = {
    compile_re(r"[a-f0-9]{32}(:.+)?"):  ["MD5", "MD4", "MD2", "Double MD5", "LM", "RIPEMD-128", "Haval-128", "Tiger-128", "Skein-256(128)", "Skein-512(128", "Lotus Notes/Domino 5", "Skype", "ZipMonster", "PrestaShop"],
    compile_re(r"[a-f0-9]{64}(:.+)?"):  ["SHA-256", "RIPEMD-256", "SHA3-256", "Haval-256", "GOST R 34.11-94", "GOST CryptoPro S-Box", "Skein-256", "Skein-512(256)", "Ventrilo"],
    compile_re(r"[a-f0-9]{128}(:.+)?"): ["SHA-512", "Whirlpool", "Salsa10", "Salsa20", "SHA3-512", "Skein-512", "Skein-1024(512)"],
    compile_re(r"[a-f0-9]{56}"):        ["SHA-224", "Haval-224", "SHA3-224", "Skein-256(224)", "Skein-512(224)"],
    compile_re(r"[a-f0-9]{40}(:.+)?"):  ["SHA-1", "Double SHA-1", "RIPEMD-160", "Haval-160", "Tiger-160", "HAS-160", "LinkedIn", "Skein-256(160)", "Skein-512(160)", "MangoWeb Enhanced CMS"],
    compile_re(r"[a-f0-9]{96}"):        ["SHA-384", "SHA3-384", "Skein-512(384)", "Skein-1024(384)"],
    compile_re(r"[a-f0-9]{16}"):        ["MySQL323", "DES(Oracle)", "Half MD5", "Oracle 7-10g", "FNV-164", "CRC-64"],
    compile_re(r"\*[a-f0-9]{40}"):      ["MySQL5.x", "MySQL4.1"],
    compile_re(r"[a-f0-9]{48}"):        ["Haval-192", "Tiger-192", "SHA-1(Oracle)", "XSHA (v10.4 - v10.6)"]
}

def obtain_hash_type(check_hash):
    found = False
    for algorithm, items in HASH_TYPE_REGEX.items():
        if algorithm.match(check_hash):
            found = True
            enumerate_hash_types(items)
    if not found:
        print("Unable to verify hash type "
          "for hash: '{}'. This could mean "
          "that this is not a valid hash, or that "
          "this hash is not supported by Pybelt "
          "yet. If you feel this should be supported "
          "make an issue regarding this hash.".format(check_hash))


def enumerate_hash_types(items, nb_likeliest=3):
    output = ""
    print("{} possible hash types found..".format(len(items)))
    for count, item in enumerate(items, start=1):
        if count <= nb_likeliest:
            output += f"Most likely possible hash type: {item}\n"
            if count == nb_likeliest:
                print("\n\n")
        else:
            output += f"Least likely possible hash type: {item}\n"
    with open("hash_report.txt", 'w') as file:
        file.write(str(output))
        print("Written to file!")
        file.close()


if __name__ == '__main__':
    check_hash = sys.argv[1]
    print("Analyzing hash: {}".format(check_hash))
    obtain_hash_type(check_hash)

        
        
