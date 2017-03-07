require 'colorize'

theme_dir = 'imc'
theme_asset_dir = theme_dir + '/assets'
theme_asset_css_dir = theme_asset_dir + '/css'
theme_asset_js_dir = theme_asset_dir + '/js'
imc_bootstrap_sass_dir = 'imc-bootstrap-sass'

desc 'Dump the local DB to the ./db/seed-db.sql file.'
task :dump_db do |t|
  exec_command('docker-compose exec mysql sh -c "exec mysqldump --all-databases -uroot -ppassword" > db/seed-db.sql')
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
{test: '/var/lib/wordpress/wp-content/themes/imc/',
 staging: '/var/www/imc_staging/www/site/wp-content/themes/imc_wordpress_theme/'}.each do |fabric, prod_theme_dir|
  desc "Upload the #{theme_dir} theme to #{fabric}"
  task "upload_theme_#{fabric}".to_sym do
    puts "Uploading the #{theme_dir} theme to #{fabric}"
    exec_command("rsync --exclude=\"*.swp\" -avz #{theme_dir}/ #{prod_server}:#{prod_theme_dir}")
  end
end

def exec_command(cmd)
  puts "  #{cmd}".green
  puts `#{cmd}`.split("\n").map {|l| "  #{l}"}.join("\n")
end
