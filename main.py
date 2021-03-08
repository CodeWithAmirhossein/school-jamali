from os import system
from sys import argv

for i in range(1, 30):
    system(f'git commit --amend --no-edit --date "Mon {i} Dec 2020 20:19:19" && git pull --no-edit && git push')
