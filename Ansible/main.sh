#!/bin/bash

# Step 1: Install ansible
sudo apt install ansible

# Step 2: Run playbooks
ansible-playbook webserver.yaml --ask-become-pass
ansible-playbook database.yaml --ask-become-pass
