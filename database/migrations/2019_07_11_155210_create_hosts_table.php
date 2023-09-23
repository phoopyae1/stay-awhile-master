e        <?php

        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;


        class CreateHostsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                if(!Schema::hasTable('hosts')){
                  Schema::create('hosts', function (Blueprint $table) {
                      $table->bigIncrements('id');
                      $table->bigInteger('user_id')->unsigned();
                      $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
                      $table->string('name')->nullable();
                      $table->string('position')->nullable();
                      $table->string('photo')->nullable();
                      $table->timestamps();
                      $table->engine = 'InnoDB';
                      $table->charset = 'utf8';
                      $table->collation = 'utf8_unicode_ci';
                  });
                }

            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::drop('hosts');
            }
        }
