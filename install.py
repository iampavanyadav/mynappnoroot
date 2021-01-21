import os
import sys
import time


print(""" \033[1;36m
┌══════════════════════════════════════════════════════════════┐
█                                                              █
█                     INSTALLING THE TOOLS                     █
█                                    Created By Pavan Yadav    █
└══════════════════════════════════════════════════════════════┘     \033[1;m""")


print("\033[1;34m\n[++] Installing apache2 ... \033[1;m")
time.sleep(2)
apache=os.system("pkg install -y apache2")
time.sleep(1)

print("\033[1;34m\n[++] Installing php ... \033[1;m")
time.sleep(2)
php=os.system("pkg install -y php")
time.sleep(1)

print("\033[1;34m\n[++] Installing mysql ... \033[1;m")
time.sleep(2)
mdb=os.system("pkg install -y mariadb")
time.sleep(1)

print("\033[1;34m\n[++] Installing Hydra ... \033[1;m")
time.sleep(2)
apache=os.system("pkg install -y hydra")
time.sleep(1)


print("\033[1;34m\n[++] Install Wget ... \033[1;m")
time.sleep(2)
mdb=os.system("pkg install -y wget")
time.sleep(1)

print("\033[1;34m\n[++] Downloading Ngrok for ARM ... \033[1;m")
time.sleep(2)
wget=os.system("wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm.zip")
time.sleep(1)

print("\033[1;34m\n[++] Unzipping Ngrok ARM ... \033[1;m")
time.sleep(3)
mdb=os.system("unzip ngrok*")
time.sleep(1);

print("\033[1;34m\n[++] Instalation Completed ... \033[1;m")
