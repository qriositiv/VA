#!/bin/bash

# Step 1: Install ansible
sudo apt install ansible

# Step 2: Run playbooks
ansible-playbook -i hosts webserver.yaml --ask-become-pass
ansible-playbook -i hosts database.yaml --ask-become-pass
