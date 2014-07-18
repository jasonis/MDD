MDD
===
### Switch from Dev branch to Master branch
	1 $ git checkout master

### Pull the Master branch
	1 $ git pull github master

		1 $ git add -A
		2 $ git commit -am ‘commit message.’
		3 $ git pull github master

### Resolve conflicts
	1 $ git merge newFeatureName

### Tag the release
	1 $ git tag -a vX.X.X -m ‘Release Code or Feature Name ’
	2 $ git push github --tags

### Push to staging
	1 $ git push staging master
