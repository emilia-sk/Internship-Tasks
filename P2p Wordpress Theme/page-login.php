<?php /* Template Name: Login */

get_header(); 

?>

<section class="two-columns-text-img login position-relative">
        <div class="container position-relative py-4">
            <div class="row">

                <div class="col-6 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">
                <div class="w-75">
                        <h2 class="heading-main mb-4">
                            Вход
                        </h2>
                        <div class="devider-main mb-3"></div>

                    <?php //Login Form
                    $args = array(
                        'echo' => false,
                        'redirect' => home_url('/user/'), 
                        'id_username' => 'user',
                        'id_password' => 'pass',
                        'label_username' => '',
                        'label_password' => '',
                        'remember' => false,
                    );
                    
                    $form = wp_login_form( $args ); 
                    
                    $form = str_replace('name="log"', 'name="log" placeholder="Email..."', $form);
                    $form = str_replace('name="pwd"', 'name="pwd" placeholder="Парола"', $form);
                    $form = str_replace('name="wp-submit"', 'name="wp-submit" value="Влизане"', $form);
                    
                    $login  = (isset($_GET['login']) ) ? $_GET['login'] : 0;
                    if ( $login === "failed" ) {
                        echo '<p class="login-msg"><strong>ERROR:</strong> Невалидно име/парола! </p>';
                      } elseif ( $login === "empty" ) {
                        echo '<p class="login-msg"><strong>ERROR:</strong> Името и/или Паролата са празни! </p>';
                      } 
                      
                    echo $form;
                     ?>

                       <button class="btn btn-form mt-3 mt-md-0 registerBtn" type="button">Регистрация</button>
                       
                       <a class="small-link text-decoration-none" href="<?php echo esc_url( wp_lostpassword_url() ); ?>" alt="<?php esc_attr_e( 'Lost Password', 'textdomain' ); ?>">
                        <?php esc_html_e( 'Забравена парола →', 'textdomain' ); ?></a>

                    </div>
                   
                </div>
                
                <div class="col-6 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">
                    <div class="section-img mt-5 mt-md-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/undraw_secure_login_pdn4 1.svg" alt="" class="img-fluid">
                    </div>
                </div>
           
            </div>
            
            <div class="fllying-objects d-none d-md-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dots_.svg" alt="" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="register position-relative">
        <div class="container position-relative py-4">
            <div class="row">
                <div class="col-md text-center">
                    <h2 class="heading-main mb-4">
                        Регистрация
                    </h2>
                    <div class="devider-main mb-3 mx-auto"></div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
            
                    <form action="" method="POST" class="main-form mt-3" id='register-wp-form'>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group mt-4">
                                <input name="name" id="name" class="form-control" placeholder="Име" required>
                                </div>

                                <div class="form-group mt-4">

                                    <?php 
                                        $schoolArgs = array(
                                            'post_type' => 'schools',
                                            'order' => 'ASC'
                                        );   

                                        $schools_query = new WP_Query( $schoolArgs );
                                        $schools_posts = $schools_query->get_posts();

                                        ?>

                                    <?php 

                                    if( $schools_posts ): 

                                    ?>

                                    <select name ="school" id="school" class="form-control select-option">

                                    <?php foreach($schools_posts as $post){ ?>

                                    <option value="<?php the_title(); ?>"><?php the_title(); ?></option>

                                    <?php } ?>
                                        
                                    <?php
                                    endif;
                                    ?>
                                    
                                    </select>
                                    
                                </div>

                                <div class="form-group mt-4">
                                <input name="email" type="email" id="email" class="form-control" placeholder="Email" required>
                                </div>

                                <div class="form-group mt-4">
                                <input name="password" type="password" id="password" class="form-control" placeholder="Парола" required>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group mt-4">
                                <input name="phone" id="phone" class="form-control" placeholder="Телефонен номер" required>
                                </div>

                                <div class="form-group mt-4">
                                <select name ="class" id="class" class="form-control select-option">
                                    <option selected>Клас</option>
                                    <option>X Клас</option>
                                    <option>IX Клас</option>
                                    <option>XI Клас</option>
                                </select>
                                </div>

                                <div class="form-group d-flex align-items-center mb-0 mt-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender"
                                            value="female">
                                        <label class="form-check-label" for="female">Жена</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender"
                                            value="male">
                                        <label class="form-check-label" for="male">Мъж</label>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md d-flex justify-content-end mt-4">
                                <div class="form-buttons d-flex flex-column ">
                                    <button type="submit" class="btn btn-main mt-3 mt-md-0">Създай профил</button>
                                    <button type="button" form="register-wp-form"
                                        class="btn-secondary small-text-1 mt-3 mr-2 btn-back-to-login text-right">
                                        ← Назад</button>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
            <div class="fllying-objects d-none d-md-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dots_.svg" alt="" class="img-fluid">
            </div>
        </div>
    </section>

<?php get_footer(); ?>