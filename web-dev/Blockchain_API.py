# API format provided by Blockcypher.com version 1
# Script developed and maintained by SeekHash team
# Version 2.0 

import json, datetime, requests, sys

# Conversion of datetime in json format to string
def defaultconverter(o):
  if isinstance(o, datetime.datetime): 
      return o.__str__()

def Identify_Crypto(HASH):
    if HASH[0:2] == "0x": Crypto = "ETH"
    else: Crypto = "BTC"
    return Crypto

def query_request(main_url, crypto_url, hash):
    request_url = f"{main_url}{crypto_url}{hash}"
    r           = requests.get(request_url)
    data        = r.json()
    print((json.dumps(data, default=defaultconverter, indent=4)))

def help_menu():
    msg = """
    Usage: [program name] [options] [hash]
    Options and arguments:
    -b      : Block overview, represents the current state of a particular block from a Blockchain
    -t      : Transaction overview, represents the current state of a particular transaction from either a Block within a Blockchain, or an unconfirmed 
              transaction that has yet to be included in a Block.
    -a      : Address overview, represents a public address on a blockchain, and contains information about the state of balances and transactions 
              related to this address.
    -help   : Help menu """
       
    print(msg)
    exit()   
   
if __name__ == "__main__":
    
    global crypto_url, Crypto
    
    hash    = sys.argv[2]
    options = sys.argv[1]
    if options == "-help": help_menu()
    
    main_url = "https://api.blockcypher.com/v1/"
    Crypto   = Identify_Crypto(hash)
    
    if Crypto == "BTC": 
        if options   == "-b" and len(hash) == 64: crypto_url = "btc/main/blocks/"
        elif options == "-t" and len(hash) == 64: crypto_url = "btc/main/txs/"
        elif options == "-a" and len(hash) == 34: crypto_url = "btc/main/addrs/"
            
    elif Crypto == "ETH":
        if options   == "-b" and len(hash) == 66: crypto_url = "eth/main/blocks/"
        elif options == "-t" and len(hash) == 66: crypto_url = "eth/main/txs/"
        elif options == "-a" and len(hash) == 42: crypto_url = "eth/main/addrs/"
        hash = hash[2:]
    else:
        print("Invalid Options or Hash") 
    query_request(main_url, crypto_url, hash)
    print(Crypto)
