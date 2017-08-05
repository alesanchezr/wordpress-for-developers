**Note**: if you are cloning into an existing wordpress installation you'll get the: 
**destination path '.' already exists and is not an empty directory.**
Run this commands to make it work:

- Clone just the repository's .git folder into an empty temporary directory. Might want --no-hardlinks for cloning local repo.
	```sh
	$ git clone --no-checkout git@github.com:alesanchezr/wordpress-for-developers.git tmp-repository.tmp
	```
- Move the .git folder to the directory with the files. This makes the desired folder a git repo.
	```sh
	$ mv tmp-repository.tmp/.git .
	```
- Delete the temporary directory.
	```sh
	$ rmdir tmp-repository.tmp

	$ cd .
	```
- GIT thinks all files are deleted, this reverts the state of the repo to HEAD.
WARNING: any local changes to the files will be lost.
	```sh
	$ git reset --hard HEAD
	```
