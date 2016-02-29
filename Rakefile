require 'colorize'

theme_dir = 'imc'
theme_asset_dir = theme_dir + '/assets'
theme_asset_css_dir = theme_asset_dir + '/css'
theme_asset_js_dir = theme_asset_dir + '/js'
imc_bootstrap_sass_dir = 'imc-bootstrap-sass'

task :dump_db do |t|
  exec_command('mysqldump -u root -ppassword --add-drop-table imc_wordpress > /vagrant/seed-db.sql 2>/dev/null')
end

desc 'Compile necessary assets and copy them to js/'
task :build_assets do
  puts "Ensuring #{imc_bootstrap_sass_dir} submodule has dependencies installed...".blue.bold
  exec_command("cd #{imc_bootstrap_sass_dir} && bundle install")

  puts "Compiling CSS to #{theme_asset_css_dir}".blue.bold
  exec_command("cd #{imc_bootstrap_sass_dir} && rake compile[../#{theme_asset_css_dir}]")

  puts "Copying JS to #{theme_asset_js_dir}".blue.bold
  exec_command("mkdir -p #{theme_asset_js_dir} && cp #{imc_bootstrap_sass_dir}/assets/javascripts/bootstrap.min.js #{theme_asset_js_dir}")
end

def exec_command(cmd)
  puts "  #{cmd}".green
  puts `#{cmd}`.split("\n").map {|l| "  #{l}"}.join("\n")
end
