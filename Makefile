.PHONY: install
install:
	clear
	@echo " "
	@echo "================================================================="
	@echo "Local starts on  "`date`
	@echo "================================================================="
	@echo "  "
		git push origin master
	@echo " "
	@echo " "
	@echo "================================================================="
	@echo "Remote starts on  "`date`
	@echo "================================================================="
	@echo " "
	@ssh juandelperal@juandelperal.webfactional.com "\
	    cd /home/juandelperal/webapps/casasdeconvivencias && \
	    git pull origin master  \
	"
	@echo " "
	@echo " "
	@echo "================================================================="
	@echo "Installation finished on "`date`
	@echo "================================================================="
	@echo " "