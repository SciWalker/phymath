# phymath
Website for physics and math resources as well as simulations, solution providers.
# repo
ssh://sciwalker@phymath.com/home/sciwalker/repositories/phymath_v2
https://github.com/SciWalker/phymath.git

# If you want to push to a cpanel git repo, use this command:
git push origin master -u --exec=/usr/local/cpanel/3rdparty/bin/git-receive-pack

# fast deploy
git add . && git commit -m "your commit message"
git push phymath-cpanel-origin master -u --exec=/usr/local/cpanel/3rdparty/bin/git-receive-pack && git push origin master

# local server
php -S localhost:8000

# tech/app/object_detection_v2
The source code would be gotten from https://github.com/SciWalker/onnxruntime.git
just run the build according to the readme from that repo, then move the output files to the tech/app/object_detection_v2 folder, with the exception that the object_detection.html file should be moved to the tech/app folder.