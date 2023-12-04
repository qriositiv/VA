#!/bin/bash

# Step 1: Install ansible
sudo apt install ansible

# Step 2: Create and copy SSH key
ssh-keygen -t ed25519
ssh-copy-id arni9309@localhost

# Step 3: Go to Ansible directory
cd VA/Ansible

# Step 4: Run playbooks
ansible-playbook -i hosts webserver.yaml --ask-become-pass
ansible-playbook -i hosts database.yaml --ask-become-pass
