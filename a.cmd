@ECHO OFF

doskey pa=php artisan $*
doskey pas=php artisan serve $*

doskey pamc=php artisan make:controller $*
doskey pame=php artisan make:event $*
doskey paml=php artisan make:listener $*
doskey pamj=php artisan make:job $*
doskey pamm=php artisan make:model $*
doskey pammi=php artisan make:middleware $*
doskey pams=php artisan make:seeder $*
doskey pamp=php artisan make:policy $*
doskey pamreq=php artisan make:request $*
doskey pamres=php artisan make:resource $*

doskey pakg=php artisan key:generate $*
doskey pasl=php artisan storage:link $*
doskey parl=php artisan route:list $*

doskey pacc=php artisan cache:clear $*
doskey pacoc=php artisan config:clear $*
doskey parc=php artisan route:clear $*
doskey paoc=php artisan optimize:clear $*
doskey pamrs=php artisan migrate:fresh --seed $*


doskey paqw=php artisan queue:work $*
doskey paql=php artisan queue:listen $*
doskey pasr=php artisan schedule:run $*
