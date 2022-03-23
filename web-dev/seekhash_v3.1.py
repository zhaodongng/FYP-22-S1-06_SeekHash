import sys
from guesslang import Guess
guess = Guess()

#-- Hash library function 
def hash_library(lang):

    #--1--: Python
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

#-- Check programming language if file extension is 
#-- 1. ".txt" (normal text file)
#-- 2. ".c" (Because Golang and C have the same extension)
def guess_language(file):
    with open(file,'r') as readFile:
        data = readFile.read()
        name = guess.language_name(data)
        prob = guess.probabilities(data)
    return name, prob

#-- Finding of hash functions within script
def find_HashFunction(script, hashes):
    output = ""
    for x in hashes:
        lookup = x
        with open(script, 'r') as SrcFile:
            for num, line in enumerate(SrcFile, 1):
                line = line.lower() #No need lower?
                if lookup in line:
                    display = f'{lookup} found at line: {num}\n'
                    #print(display)
                    output += display
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
    output = " "

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
    script = script.lower()
    hashLengthDict = {}
    outputTxt = ""

    outputTxt += "\n"
    outputTxt += "The file read in is " + script + ";\n\n"
    
    #-2- Check if script is ".txt", otherwise check what language is it
    # If True, its .txt extension, if False, check script extension.
    if check_txt(script) == True:
        language, prob = guess_language(script)
    else:
        language, prob = check_ext(script)
    
    print(prob)
    if prob == "1":
        first_prob = "1"
    else:    
        first_prob = str(round(prob[0][1],3))
        
    outputTxt += "The programming language detected is " + language + ";\n\n"
    output = platform(language)
    outputTxt += f"The platforms using this language are: {output};\n\n"
    outputTxt += "The programming language probabilities is " + first_prob +";\n\n"
    
    #-3- Getting the hash functions from hash library based on the programming language
    hashes = hash_library(language)
    
    #-4- Single out the hash functions within the script
    hashesFound = find_HashFunction(script, hashes)

    #print(hashesFound)
    outputTxt += hashesFound
    outputTxt += "\n"
    
    #-5- Find the hash length and output the hash strength
    hashLengthDict = hash_length(language)
    found_array = []
    for hash_found in hashesFound.split():
        for Dict_key in hashLengthDict.keys():
            if Dict_key in hash_found and Dict_key not in found_array:
                found_array.append(Dict_key)
                outputTxt += "Hash function detected: {}, the hash length of the hashes is : {}bits;\n".format(Dict_key.upper(), hashLengthDict[Dict_key])
                
                for past in past_Attacks:
                    if hash_found == past:
                        outputTxt += f"Known past attacks on {hash_found.upper()} detected, {past_Attacks[hash_found]};\n"
                        past_attacks_done.append(hash_found)
                        
    print("Output file is stored in report.txt")


    #-6- Output the report to user
    with open("report.txt", "w") as output:
        output.write(outputTxt)

    output.close()
    

if __name__ == '__main__':
    main()
