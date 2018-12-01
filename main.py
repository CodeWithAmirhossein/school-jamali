# git commit -m "Add new version box" --amend --no-edit --date "Mon 21 Dec 2021 20:19:19"

import os
import sys

for i in range(1, 32):
    os.system('rm -rf x.py')
    os.system('touch x.py')
    os.system('git add -A')
    os.system(f'git commit -m "Create x.py" --amend --no-edit --date "Mon {i} {sys.argv[1]} {sys.argv[2]} 20:19:19" && git push --force')
