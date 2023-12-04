# **VA** - simple love website
---
### Project main task
To setup simple website with a button which redirects user to a outsource page every new day during one year. Links to the outsourced pages should be changed automatically.

### Folders structure
**Ansible** - stores webserver.yaml and database.yaml playbooks for fast project setup and/or update.
**Misc** - SQL, markdown and other files.
**Web** - stores websites frontend and backend.

### Instaliation

1. Create an ansible-vm virtual machine from debian12 template.
2. Connect to the ansible-vm.
3. Write next command to install git:
`sudo apt-get update && sudo apt-get upgrade -y`
`sudo apt install git`
`git config --global user.email your.github@mail`
`git config --global user.name Username`
change your.github@mail into your real github email and instead Username write your name.
4. Clone the repository: `git clone https://github.com/qriositiv/VA`
