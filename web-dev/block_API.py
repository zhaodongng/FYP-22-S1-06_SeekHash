import requests
import json
import sys

def singleBlock(block_hash):
    url = "https://blockchain.info/rawblock/"
    response = requests.get(url + block_hash)
    with open("singleblock.txt", "w") as file:
        file.write(json.dumps(response.json(), indent=4))
    print("Data written to singleblock.txt")

def singleTx(tx_hash):
    url = "https://blockchain.info/rawtx/"
    response = requests.get(url + tx_hash)
    with open("singleTX.txt", "w") as file:
        file.write(json.dumps(response.json(), indent=4))
    print("Data written to singleTX.txt")

        
def singleAddr(addr):
    url = "https://blockchain.info/rawaddr/"
    response = requests.get(url + addr)
    with open("singleAddr.txt", "w") as file:
        file.write(json.dumps(response.json(), indent=4))
    print("Data written to singleAddr.txt")
        
'''
def multiAddr(addr_arr):
    url = "https://blockchain.info/multiaddr?active="
    for address in addr_arr:
        url += f"{address}|"
    response = requests.get(url)
    with open("multiAddr.json", "w") as file:
        file.write(json.dumps(response.json(), indent=4))
'''        

    
def main():
    flag = sys.argv[1]
    
    if flag == "singleBlock":
        block_hash = sys.argv[2]
        singleBlock(block_hash)
        
    elif flag == "singleTx":
        tx_hash = sys.argv[2]
        singleTx(tx_hash)
        
    elif flag == "singleAddr":
        addr = sys.argv[2]
        singleAddr(addr)
        
    else:
        print("Invalid flag usage")

if __name__ == '__main__':
    main()