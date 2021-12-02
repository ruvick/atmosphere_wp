<?

// Описание полей для Carbon_Fields производим только в этом файле
// 1. В начале идет описание полей - Настройки темы  далее категорий (если необходимо) в конце аблонов страниц и записей
// 2. Префиксы проставляем каждый раз новые осмысленно по имени проекта 
// 3. Для Полей которые входят в состав составново схема именования следующая <Общий префикс>_<название составного поля>_<имя поля>
// 4. Название секций Так же придумываем осмысленные на русском языке чтобы небыло сплошных Доп. полей
// 5. Каждый блок комментируем


use Carbon_Fields\Container;
use Carbon_Fields\Field; 

Container::make( 'theme_options', __( 'Настройки темы', 'crb' ) )
    ->add_tab('Главная', array(
      // Field::make( 'image', 'as_logo', 'Логотип в шапке')
      //   ->set_width(30),
      // Field::make( 'image', 'as_logo_white', 'Логотип в подвале')
      //   ->set_width(30),
      Field::make('text', 'about_home_title', 'Заголовок на главной'),
      // Field::make('rich_text', 'about_home', 'О нашей компании')
    ))
    ->add_tab('Клубные карты', array(
      Field::make('complex', 'complex_club_cards', 'Выводим Клубные карты')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'img_club_cards', 'Фото')
        ->set_width(10),
        Field::make('text', 'title_club_cards', 'Заголовок')   
        ->set_width(20),
        Field::make('text', 'text_club_cards', 'Текст')   
        ->set_width(65),
        // Field::make('text', 'link_promo', 'Ссылка')   
        // ->set_width(30),
        ))
    ))
    ->add_tab('Акции', array(
      Field::make('complex', 'complex_promo', 'Выводим блоки с Акциями')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'img_promo', 'Фото')
        ->set_width(10),
        Field::make('text', 'title_promo', 'Заголовок')   
        ->set_width(20),
        Field::make('text', 'text_promo', 'Текст')   
        ->set_width(65),
        // Field::make('text', 'link_promo', 'Ссылка')   
        // ->set_width(30),
        ))
    ))
    ->add_tab('Тренеры', array(
      Field::make('complex', 'complex_team', 'Выводим карточки тренеров')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'img_team', 'Фото')
        ->set_width(10),
        Field::make('text', 'surname_team', 'Фамилия')   
        ->set_width(30),
        Field::make('text', 'name_team', 'Имя')   
        ->set_width(30),
        Field::make('text', 'pers_training_team', 'Персональные тренировки')    
        ->set_width(50),
        Field::make('text', 'group_training_team', 'Групповые тренировки')    
        ->set_width(50),
        // Field::make('text', 'link_promo', 'Ссылка')   
        // ->set_width(30),
        ))
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_company', __( 'Название' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
        Field::make( 'text', 'as_club_opening_weekdays', __( 'Часы работы клуба, будни' ) )
          ->set_width(50),
        Field::make( 'text', 'as_club_opening_weekends', __( 'Часы работы клуба, выходные' ) )
          ->set_width(50),
        Field::make( 'text', 'as_sales_department', __( 'Часы работы отдела продаж' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_1', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_phone_2', __( 'Телефон 2' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) ) 
          ->set_width(50),
        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_kpp', __( 'КПП' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bik', __( 'БИК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_rs', __( 'Р/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_ks', __( 'К/С' ) )
          ->set_width(50),
        Field::make( 'text', 'as_bank', __( 'БАНК' ) )
          ->set_width(50),
        Field::make( 'text', 'as_insta', __( 'instagram' ) )
          ->set_width(50),
        // Field::make( 'text', 'as_face', __( 'facebook' ) )
        //   ->set_width(50),
        Field::make( 'text', 'as_vk', __( 'Вконтакте' ) )
          ->set_width(50),
        Field::make( 'text', 'as_telegr', __( 'telegram' ) )
          ->set_width(50),
        Field::make( 'text', 'as_whatsapp', __( 'whatsapp' ) )
          ->set_width(50),
        Field::make('text', 'map_point', 'Координаты карты')
          ->set_width(50),
        Field::make('text', 'text_map', 'Текст метки карты')
          ->set_width(50),
    ) );
    // Container::make('post_meta', 'ultra_product_cr', 'Характеристики товара')
    // ->show_on_post_type(array( 'ultra'))
    //   ->add_fields(array(   
    //   Field::make('textarea', 'offer_smile_descr', 'Краткое описание')->set_width(100),
    //   // Field::make('text', 'offer_name', 'Название товара')->set_width(30),
    //   // Field::make('text', 'offer_label', 'Метка на товаре')->set_width(30),
    //   Field::make('text', 'offer_weight', 'Вес')->set_width(50),
    //   // Field::make('text', 'offer_allsearch', 'Все артикулы для поиска')->set_width(50),
    //   // Field::make('text', 'offer_siries', 'Серия (для сопутствующих)')->set_width(30),
    //   Field::make('text', 'offer_sticker', 'Стикер')->set_width(50), 
    //   Field::make('text', 'offer_price', 'Цена')->set_width(50),
    //   Field::make('text', 'offer_number', 'Колличество')->set_width(50),
    //   Field::make('text', 'offer_sku', 'Артикул (Базовый)')->set_width(50),
    //   // Field::make('text', 'offer_benefit', 'Выгода')->set_width(50),
    //   Field::make('rich_text', 'prod_descrip', 'Описание товара')->set_width(100),
    //   Field::make('text', 'offer_calories', 'Калории')->set_width(50),
    //   Field::make('text', 'offer_protein', 'Белки')->set_width(50),
    //   Field::make('text', 'offer_fats', 'Жиры')->set_width(50),
    //   Field::make('text', 'offer_carbohyd', 'Углеводы')->set_width(50),

      // Field::make( 'complex', 'offer_cherecter', "Характеристики товара табы, левая колонка" )
      // ->add_fields( array(
      //   Field::make( 'text', 'tab_name', 'Наименование параметра' )->set_width(50),
      //   Field::make( 'text', 'tab_val',  'Значение' )->set_width(50),
      // ) ),
      // Field::make( 'complex', 'offer_cherecter-r', "Характеристики товара табы, правая колонка" )
      // ->add_fields( array(
      //   Field::make( 'text', 'tab_name-r', 'Наименование параметра' )->set_width(50),
      //   Field::make( 'text', 'tab_val-r',  'Значение' )->set_width(50),
      // ) ),
      // Field::make('rich_text', 'acses_text', 'Аксесуары')->set_width(100),
      
      // Field::make('text', 'offer_old_price', 'Старая цена (Базовая)')->set_width(50),
      
      // Field::make( 'complex', 'offer_modification', "Модификация товара" )
      // ->add_fields( array(
      //   Field::make('text', 'mod_name', 'Наименование модификации' )->set_width(20),
      //   Field::make('text', 'mod_sku', 'Артикул модификации')->set_width(20),
      //   Field::make('text', 'mod_price', 'Цена модификации')->set_width(20),
      //   Field::make('text', 'mod_old_price', 'Старая цена модификации')->set_width(20),
      //   Field::make('text', 'mod_picture_id', 'Изображения модификации')->set_width(20),
      // ) ),
        
      // Field::make( 'complex', 'offer_picture', "Галерея товара" )
      // ->add_fields( array(
      //   Field::make('image', 'gal_img', 'Изображение' )->set_width(30),
      //   Field::make('text', 'gal_img_sku', 'ID для модификации')->set_width(30),
      //   Field::make('text', 'gal_img_alt', 'alt и title')->set_width(30)        
      // ) ),

    //   Field::make('complex', 'complex_analogs', 'Ближайшие аналоги')
    //     ->set_max(4) // Можно будет выбрать только 5 постов
    //   ->add_fields(array(
    //     Field::make('image', 'img_analogs', 'Фото')
    //       ->set_width(33),
    //     Field::make('text', 'price_analogs', 'Цена') 
    //       ->set_width(33),
    //     Field::make('text', 'link_analogs', 'Ссылка на товар') 
    //       ->set_width(33),
    // ))

  // ));

  Container::make('post_meta', 'club', 'Доп поля')
  ->show_on_template(array('page-club.php'))
      ->add_fields(array(   
      Field::make( 'complex', 'complex_club_galery', "Фото галерея" )
        // ->set_max(2) // Можно будет выбрать только 2 поста
        ->add_fields( array(
          Field::make('image', 'club_galery_img', 'Изображение' )->set_width(30),
          Field::make('text', 'club_galery_txt', 'Текст')->set_width(30),
      ) ),
  ));

  Container::make('post_meta', 'zone', 'Доп поля')
  ->show_on_template(array('page-fitness-zone.php', "page-cafe-zone.php", "page-beauty-zone.php"))
      ->add_fields(array(   
      Field::make('text', 'zone_subtitle', 'Подзаголовок в банере') 
        ->set_width(33),
      Field::make('rich_text', 'zone_text', 'Описание')->set_width(100),
      Field::make( 'complex', 'complex_zone_galery', "Фото галерея" )
        // ->set_max(2) // Можно будет выбрать только 2 поста
        ->add_fields( array(
          Field::make('image', 'zone_galery_img', 'Изображение' )->set_width(30),
          Field::make('text', 'zone_galery_txt', 'Текст')->set_width(30),
      ) ),
  ));

  Container::make('post_meta', 'Fitnes zone', 'Программы')
      ->show_on_page(28)
      ->add_fields(array(   
      Field::make('complex', 'complex_programm', 'Программы Fitnes Zone')
      // ->set_max(3) // Можно будет выбрать только 5 постов
      ->add_fields(array(
        Field::make('image', 'img_programm', 'Картинка')
        ->set_width(10),
        Field::make('text', 'title_programm', 'Заголовок')   
        ->set_width(20),
        Field::make('text', 'text_programm', 'Текст')   
        ->set_width(65),
        // Field::make('text', 'link_programm', 'Ссылка')   
        // ->set_width(30),
        )),
  ));

  // Container::make('post_meta', 'page-gallery-tkaney-obivki-sidenii', 'Характеристики записи')
  // ->show_on_template(array('page-gallery-tkaney-obivki-sidenii.php'))
  //     ->add_fields(array(   
  //     Field::make( 'complex', 'galery_velours', "Велюр" )
  //     ->add_fields( array(
  //       Field::make('image', 'galery_velours_img', 'Изображение' )->set_width(30),
  //       Field::make('text', 'galery_velours_img_alt', 'alt и title')->set_width(30)        
  //     ) ),

  //     Field::make( 'complex', 'galery_eco', "Эко-Кожа" )
  //     ->add_fields( array(
  //       Field::make('image', 'galery_eco_img', 'Изображение' )->set_width(30),
  //       Field::make('text', 'galery_eco_img_alt', 'alt и title')->set_width(30)        
  //     ) ),

  //     Field::make( 'complex', 'galery_leather', "Кожа" )
  //     ->add_fields( array(
  //       Field::make('image', 'galery_leather_img', 'Изображение' )->set_width(30),
  //       Field::make('text', 'galery_leather_img_alt', 'alt и title')->set_width(30)        
  //     ) ),

  // ));

?>