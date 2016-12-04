# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure(2) do |config|
  # The most common configuration options are documented and commented below.
  # For a complete reference, please see the online documentation at
  # https://docs.vagrantup.com.

  # Every Vagrant development environment requires a box. You can search for
  # boxes at https://atlas.hashicorp.com/search.
  config.vm.box = "imc-website"
  config.vm.box_url = "file:///tmp/package.box"

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  config.vm.network "forwarded_port", guest: 8080, host: 8080

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  # config.vm.network "private_network", ip: "192.168.33.10"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # config.vm.synced_folder "../data", "/vagrant_data"

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  config.vm.provider "virtualbox" do |vb|
  #   # Display the VirtualBox GUI when booting the machine
  #   vb.gui = true
  #
  #   # Customize the amount of memory on the VM:
    vb.memory = "1024"
  end
  #
  # View the documentation for the provider you are using for more
  # information on available options.

  # Define a Vagrant Push strategy for pushing to Atlas. Other push strategies
  # such as FTP and Heroku are also available. See the documentation at
  # https://docs.vagrantup.com/v2/push/atlas.html for more information.
  # config.push.define "atlas" do |push|
  #   push.app = "YOUR_ATLAS_USERNAME/YOUR_APPLICATION_NAME"
  # end

  # Enable provisioning with a shell script. Additional provisioners such as
  # Puppet, Chef, Ansible, Salt, and Docker are also available. Please see the
  # documentation for more information about their specific syntax and use.
    config.vm.provision "shell", inline: <<-SHELL
      echo "Updating package database info."
      sudo apt-get update

      echo "Installing LAMP server and Wordpress."
      DB_USER="root"
      DB_PASSWORD="password"
      sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password $DB_PASSWORD"
      sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $DB_PASSWORD"
      sudo apt-get -y install lamp-server^ wordpress

      echo "Configuring MySQL for Wordpress."
      DB_NAME="imc_wordpress"

      echo "CREATE DATABASE IF NOT EXISTS $DB_NAME" | mysql -u $DB_USER -p$DB_PASSWORD

      sudo cp /usr/share/doc/wordpress/examples/setup-mysql.gz /tmp/setup-mysql.gz
      sudo gzip -fd /tmp/setup-mysql.gz

      sudo sed -i '/echo "Enter MySQL password for user $DB_USER."$/d' /tmp/setup-mysql
      sudo sed -i "s/read.*DB_PASSWORD/DB_PASSWORD='$DB_PASSWORD'/" /tmp/setup-mysql
      sudo sed -i "s/\\(MYSQLCOMMAND=\\"mysql -u \\$DB_USER \\)\\(-p\\)\\( -h \\$DB_HOST\\)/\\1\\2$DB_PASSWORD\\3/" /tmp/setup-mysql
      sudo bash /tmp/setup-mysql -n $DB_NAME -u $DB_USER localhost

      # Load the seed database
      mysql -u $DB_USER -p$DB_PASSWORD $DB_NAME < /vagrant/seed-db.sql

      # Create a link to the IMC Wordpress theme.
      ln -sf /vagrant/imc/ /srv/www/wp-content/localhost/themes/

      echo "Setting up Apache."
      cp /vagrant/000-default.conf /etc/apache2/sites-available/000-default.conf
      cp /vagrant/ports.conf /etc/apache2/ports.conf
      a2enmod rewrite && a2enmod vhost_alias && /etc/init.d/apache2 restart
      service apache2 restart

      echo "Installing dependencies needed for building assets."
      apt-get install zlib1g-dev
    SHELL
end
