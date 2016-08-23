require 'colorize'

theme_dir = 'imc'
theme_asset_dir = theme_dir + '/assets'
theme_asset_css_dir = theme_asset_dir + '/css'
theme_asset_js_dir = theme_asset_dir + '/js'
imc_bootstrap_sass_dir = 'imc-bootstrap-sass'

desc 'Dump the local DB to the seed-db.sql file.'
task :dump_db do |t|
  exec_command('mysqldump -u root -ppassword --add-drop-table imc_wordpress > /vagrant/seed-db.sql 2>/dev/null')
end

desc 'Compile necessary assets and copy them to js/.'
task :build_assets do
  puts "Ensuring #{imc_bootstrap_sass_dir} submodule has dependencies installed...".blue.bold
  exec_command("cd #{imc_bootstrap_sass_dir} && bundle install")

  puts "Compiling CSS to #{theme_asset_css_dir}".blue.bold
  exec_command("cd #{imc_bootstrap_sass_dir} && rake compile[../#{theme_asset_css_dir}]")

  puts "Copying JS to #{theme_asset_js_dir}".blue.bold
  exec_command("mkdir -p #{theme_asset_js_dir} && cp #{imc_bootstrap_sass_dir}/assets/javascripts/bootstrap.min.js #{theme_asset_js_dir}")
end

prod_server = 'insightmeditationcenter.org'
prod_theme_dir = '/var/lib/wordpress/wp-content/themes/'
desc "Upload the #{theme_dir} theme to the production server"
task :upload_theme do
  puts "Uploading the #{theme_dir} directory to #{prod_server}"
  exec_command("rsync -avz #{theme_dir} #{prod_server}:#{prod_theme_dir}")
end

def exec_command(cmd)
  puts "  #{cmd}".green
  puts `#{cmd}`.split("\n").map {|l| "  #{l}"}.join("\n")
end
