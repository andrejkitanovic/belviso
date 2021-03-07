push:
	say "Adding files"
	git add .
	say "Commiting $m"
	git commit -m "$m"
	say "Pushing live"
	git push
	say "Code is live"