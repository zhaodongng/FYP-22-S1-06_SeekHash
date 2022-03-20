#!/usr/bin/env python

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
      hashes = ['MD5',
                'SHA-1',
                'SHA-256']

    #--3--: C++
    ## Hashes are retrieved from namespace CryptoPP
    if lang == "C++":
      hashes = ['SHA1',
                'SHA256',
                'SHA384',
                'SHA512',
                'SHA224',
                'SHA3_256',
                'SHA3_512',
                'SHA128',
                'MD5',
                'BLAKE2s',
                'BLAKE2b',
                'Keccak_224',
                'Keccak_256',
                'Keccak_384',
                'Keccak_512',
                'SHAKE128',
                'SHAKE256',
                'SM3',
                'Tiger',
                'Whirpool',
                'RIPEMD160',
                'RIPEMD320']

    #--4--: Solidity
    ## Hashes are built-in 
    if lang == "Solidity":
      hashes = ['keccak256',
                'sha256',
                'ripemd160']
    
    #--5--: Golang
    ## Hashes are built-in 
    if lang == "Go":
      hashes = ['type Hash',
                'type Hash32',
                'type Hash64']
        
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
      hashStrengthDict = {'MD5'     : 128,
                          'SHA-1'   : 160,
                          'SHA-256' : 256}

    #--3--: C++
    ## Hashes are retrieved from namespace CryptoPP
    if lang == "C++":
      hashStrengthDict = {'SHA1'      : 160,
                          'SHA256'    : 256,
                          'SHA384'    : 384,
                          'SHA512'    : 512,
                          'SHA224'    : 224,
                          'SHA3_256'  : 256,
                          'SHA3_512'  : 512,
                          'SHA128'    : 128,
                          'MD5'       : 128,
                          'BLAKE2s'   : 256,
                          'BLAKE2b'   : 128,
                          'Keccak_224': 224,
                          'Keccak_256': 256,
                          'Keccak_384': 384,
                          'Keccak_512': 512,
                          'SHAKE128'  : 128,
                          'SHAKE256'  : 256,
                          'SM3'       : 256,
                          'Tiger'     : 192,
                          'Whirpool'  : 512,
                          'RIPEMD160' : 160,
                          'RIPEMD320' : 320}

    #--4--: Soliditity
    ## Hashes are built-in 
    if lang == "Solidity":
      hashStrengthDict = {'keccak256': 256 ,
                          'sha256'   : 256,
                          'ripemd160': 160}
    
    #--5--: Golang
    ## Hashes are built-in 
    if lang == "Go":
      hashStrengthDict = {'type Hash'  : 0,
                          'type Hash32': 32,
                          'type Hash64': 64}
        
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
    for x in hashes:
        lookup = x
        with open(script, 'r') as SrcFile:
            for num, line in enumerate(SrcFile, 1):
                # line = line.lower() #No need lower?
                if lookup in line:
                    print(f'{lookup} found at line:', num)


#-- Checking if its text file
def check_txt(script):
    textFile = False
    if ".txt" in script[-4:]:
        textFile = True
    return textFile

#-- Checking for file extension
def check_ext(script):
    language = ""
    prob = "100%"
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


def main():
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
        
    first_prob = str(round(prob[0][1],3))
    outputTxt += "The programming language detected is " + language + ";\n\n"
    outputTxt += "The programming language probabilities is " + first_prob +"%;\n\n"
    
    #-3- Getting the hash functions from hash library based on the programming language
    hashes = hash_library(language)
    
    #-4- Single out the hash functions within the script
    find_HashFunction(script, hashes)

    #-5- Find the hash length and output the hash strength
    hashLengthDict = hash_length(language)
    for key in hashLengthDict.keys():
        outputTxt += "The hashes used is : {}, the hash length of the hashes is : {};".format(key, hashLengthDict[key])
        outputTxt += "\n"

    print("Output file is stored in report.txt")

    #-6- Output the report to user
    with open("report.txt", "w") as output:
        output.write(outputTxt)

    output.close()
    

if __name__ == '__main__':
    main()

