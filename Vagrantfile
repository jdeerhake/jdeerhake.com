# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant::Config.run do |config|
  config.vm.box = "lucid64"
  config.vm.box_url = "http://files.vagrantup.com/lucid64.box"

  # config.vm.boot_mode = :gui
  # config.vm.network :hostonly, "192.168.33.10"
  # config.vm.network :bridged

  config.vm.share_folder "v-root", "/var/www/apps/jdeerhake.com/", "."
  config.vm.forward_port 80, 3000
  config.vm.customize ["modifyvm", :id, "--memory", 4096]


  config.vm.provision :chef_solo do |chef|
    chef.cookbooks_path = "../chef-repo/cookbooks"
    chef.roles_path = "../chef-repo/roles"
    chef.data_bags_path = "../chef-repo/data_bags"
    chef.add_role "web"
    chef.add_recipe "jdeerhake.com"

    #chef.json = { :mysql_password => "foo" }
  end
end
