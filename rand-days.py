import random, sys, os

def commit_it(day : int, month : str):
    os.system('rm -rf x.py')
    os.system('touch x.py')
    os.system('git add -A')
    os.system(f'git commit -m "Oh my GOD man" --amend --no-edit --date "Mon {day} {month} {sys.argv[1]} 20:19:19" && git push --force')

for month in ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']:
    days = []
    for ii in range(0, random.randint(1, 28)):
        random_day = random.randint(1, 5)
        if random_day in days: pass
        else: days.append(random_day)
    for day in range(len(days)):
        commits = random.randint(1, 30)
        for commit in range(commits):
            commit_it(days[day], month)
            # print(f'{sys.argv[1]} {month} {days[day]}')
    days.clear()