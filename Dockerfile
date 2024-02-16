FROM mcr.microsoft.com/vscode/devcontainers/base:0-buster

# Install PHP and related tools
RUN apt-get update \
    && export DEBIAN_FRONTEND=noninteractive \
    && apt-get -y install --no-install-recommends php

# Set the default shell to bash
RUN echo "set-option -g default-shell /bin/bash" > /root/.tmux.conf

# [Optional] Install additional tools if needed
# RUN apt-get install -y <package-name>

# Set default user and shell
USER vscode
