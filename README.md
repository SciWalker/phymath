# phymath
Website for physics and math resources as well as simulations, solution providers.
# repo
ssh://sciwalker@phymath.com/home/sciwalker/repositories/phymath
https://github.com/SciWalker/phymath.git

# If you want to push to a cpanel git repo, use this command:
git push origin master -u --exec=/usr/local/cpanel/3rdparty/bin/git-receive-pack

# fast deploy
git add . && git commit -m "your commit message"
git push phymath-cpanel-origin master -u --exec=/usr/local/cpanel/3rdparty/bin/git-receive-pack && git push origin master
