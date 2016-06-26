import json
import os

def getCPUtemperature():
    res = os.popen('vcgencmd measure_temp').readline()
    return(res.replace("temp=","").replace("'C\n",""))

def getRAMinfo():
    p = os.popen('free')
    i = 0
    while 1:
        i = i + 1
        line = p.readline()
        if i==2:
            return(line.split()[1:4])

def getCPUuse():
    return(str(os.popen("top -n1 | awk '/Cpu\(s\):/ {print $2}'").readline().strip(\
)))

def getDiskSpace():
    p = os.popen("df -h /")
    i = 0
    while 1:
        i = i +1
        line = p.readline()
        if i==2:
            return(line.split()[1:5])

CPU_temp = getCPUtemperature()
CPU_usage = getCPUuse()

RAM_stats = getRAMinfo()
RAM_total = round(int(RAM_stats[0]) / 1000,1)
RAM_used = round(int(RAM_stats[1]) / 1000,1)
RAM_free = round(int(RAM_stats[2]) / 1000,1)

DISK_stats = getDiskSpace()
DISK_total = DISK_stats[0]
DISK_used = DISK_stats[1]
DISK_free = DISK_stats[2]
DISK_perc = DISK_stats[3]

print(CPU_temp)
print(CPU_usage)
print(RAM_free)
print(RAM_used)
print(DISK_free)
print(DISK_used)

with open('/var/www/html/api.json', 'r') as f:
    json_data = json.load(f)
    json_data['temperature'] = CPU_temp
    json_data['ram_free'] = RAM_free
    json_data['ram_used'] = RAM_used
    json_data['ram_free'] = str(RAM_free) + "MB"
    json_data['ram_used'] = str(RAM_used) + "MB"
    json_data['cpuusage'] = CPU_usage

with open('/var/www/html/api.json', 'w') as f:
    f.write(json.dumps(json_data))
