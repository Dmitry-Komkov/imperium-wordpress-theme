/*Объект с данными тренеров для слайдера */

const TrainersData = {
  "1": {
    name: 'Игорь',
    program: 'Тренажерный зал',
    experienceWork: '5 лет',
    shortDescription: 'Сделает Вас сильными и выносливыми!<br> Результат гарантирован!',
    description: 'Крайне суров. Ты думаешь, что испробовал все тренировочные программы, но они не работают? Ты поменял кучу тренеров, но результата так и не достиг? Отчаялся? Опускаются руки? Значит Ты просто не тренировался у него! На тренировке Ты не будешь болтать, прохлаждаться и вести светские беседы. Ты будешь ПАХАТЬ! Он не слышит Твои жалобы. Он не знает пощады. Но он умён, поэтому вовремя остановится. Почувствовал дрожь?) Записывайся на тренировку!<br>А так же именно ОН не позволит Вам упустить переходный возраст Вашего сына. Групповая тренировка “Тренажерный зал Юноши” разовьёт в Вашем сыне Мужество, Силу и Выносливость.<br> – КМС по Пауэрлифтингу;<br>– Чемпион Центрального Федерального округа по Пауэрлифтингу;<br>– Выпускник школы Фитнеса и Бодибилдинга им.Калашникова.',
    imgSrc: '/wp-content/themes/imperium/assets/images/content/trainer-slider-1.jpg',
    id: 'trainer1'
  },
  // "2": {
  //     name: 'Алена',
  //     program: 'Тренажерный зал',
  //     experienceWork: '7 лет',
  //     shortDescription: 'Сделает Ваше тело красивым и пластичным!',
  //     description: `Стаж более 10 лет Сертифицированный тренер  по программам:<br>
  //     – Классическая аэробика, степ, силовые направления<br>
  //     – Сертифицированный тренер по фитнесу <br>
  //     – Выпускница хореографической школы<br>
  //     – Выпускница Академии Бодибилдинга и Фитнеса`,
  //     imgSrc: '/wp-content/themes/imperium/assets/images/content/trainer-slider-2.jpg',
  //     id: 'trainer2'
  // },
  "2": {
    name: 'Александр Орешкин',
    program: 'Пауэрлифтинг',
    experienceWork: 'Более 15 лет',
    shortDescription: `Профессионал в сфере набора мышечной массы и силовых показателей!`,
    description: `Мастер спорта международного класса по жиму штанги лёжа. Обладатель Кубков Европы, России, Крыма.
        Лучший соревновательный результат в экипировке 325 кг. Подготовил:<br>
        1 - МСМК<br>
        4 - МС<br>
        9 - КМС<br>
        по пауэрлифтингу.<br>
        Тренер с большим стажем более 15 лет.<br>
        Профессионал в сфере набора мышечной массы и силовых показателей!`,
    imgSrc: '/wp-content/themes/imperium/assets/images/content/trainer-slider-3.jpg',
    id: 'trainer3'
  },
  "3": {
    name: 'Натали',
    program: 'Растяжка, гимнастика, шпагат, физ. подготовка',
    experienceWork: '6 лет',
    shortDescription: 'Сделает Ваше тело красивым и пластичным!',
    description: `Мастер спорта по худ/гимнастике. <br>
        Общий тренерский опыт работы 6 лет, с детьми (в том числе и мальчиками) от 3 лет, а также со взрослыми людьми. 
        Работает над растяжкой, гибкостью, пластикой, физ/подготовкой, разучивание новых элементов.`,
    imgSrc: '/wp-content/themes/imperium/assets/images/content/trainer-slider-5.jpg',
    id: 'trainer4'
  },
  "4": {
    name: 'Магомедов Ариф',
    program: 'Бокс',
    experienceWork: '5 лет',
    shortDescription: 'Тренировки по Боксу от Чемпиона мира!',
    description: `Профессиональные региональные соревнования<br>
        2013 Чемпион России<br>
        2013 Чемпион по версии UBO Inter-Continental<br>
        2014 Чемпион по версии WBA Fedelatin<br>
        2014-2015 Чемпион по версии WBA Inter-Continental<br>
        2014 Чемпион по версии WBO Asia Pacific<br>
        2015-2016 Чемпион по версии WBO NABO<br>
        Профессиональные мировые соревнования<br>
        2014-2015 Чемпион мира среди молодежи до 24 лет по версии WBO Youth`,
    imgSrc: '/wp-content/themes/imperium/assets/images/content/trainer-slider-9.jpg',
    id: 'trainer5'
  },
  "5": {
    name: 'Татьяна',
    program: 'Здоровая спина, тренажерный зал',
    experienceWork: '15 лет',
    shortDescription: 'Реабилитационные тренировки после травм.',
    description: `Персональный тренер по бодибилдингу и фитнесу, ведущая групповых программ<br>
        – Выпускница Волгоградского Государственного Социально-педагогического университета<br>
        – Выпускница Академии Бодибилдинга и Фитнеса г. Москва<br>
        – СЕРТИФИКАТ "МАСТЕР-ТРЕНЕР, ФИТНЕСФОРМАТЫ" КОЛЛЕДЖ Фитнеса и Бодибилдинга им.Бена Вейдера г. Москва<br>
        – разряд по баскетболу, 10 лет играла в составе команды по баскетболу г.Камышин<br>
        – Работала персональным тренером и вела групповую программу"бодифитнес" г. ЧЕХОВ СП "ОЛИМПИЙСКИЙ"<br>
        – г.Москва спортклуб" ФИТНЕСЛЮДИ" <br>
        – Ведущая групповой программы "ДОЛГОЛЕТИЕ" и групповой ПРОГРАММЫ"ЗДОРОВАЯ СПИНА" <br>
        – занимаюсь проблемами восстановления у людей имеющих заболевания опорно-двигательного аппарата, сама прошла полугодовой курс реабилитации в центре"Дикуль" г.Москва`,
    imgSrc: '/wp-content/themes/imperium/assets/images/content/trainer-slider-7.jpg',
    id: 'trainer6'
  },
  // "6": {
  //   name: 'Владимир Чуриков',
  //   program: 'Фитнес, бодибилдинг, пауэрлифтинг, нутрициология',
  //   experienceWork: '3 года',
  //   shortDescription: 'Скульптор по созданию красивого тела!',
  //   description: `•Чемпион SN PRO expo 2017 в категории men’s physique <br>
  //       •Вице-чемпион Московской области<br>
  //       •Бронзовый призёр чемпионата Москва по классическому бодибилдингу.<br>
  //       •Подготовка-сопровождение спортсменки федерации бодибилдинга NBC в категории фитнес-бикини, 4-е место (юниоры) <br>
  //       Направления: <br>
  //       фитнес, бодибилдинг, пауэрлифтинг, нутрициология <br>
  //       Стаж 3 года`,
  //   imgSrc: '/wp-content/themes/imperium/assets/images/content/trainer-slider-4.jpg',
  //   id: 'trainer7'
  // },
  "6": {
    name: 'Ольга',
    program: 'Тренажерный зал',
    experienceWork: '15 лет',
    shortDescription: 'Огромный спортивный опыт и багаж знаний в индустрии спорта',
    description: `Стаж 15 лет<br>
        Образование высшее-психолог <br>
        Более 10 лет в проф.спорте . МС -биатлон <br>
        КМС -пауэрлифтинг/становая тяга WPC/AWPC/WAA`,
    imgSrc: '/wp-content/themes/imperium/assets/images/content/trainer-slider-8.jpg',
    id: 'trainer8'
  },
  "7": {
    name: 'Михаил',
    program: 'Тренажерный зал',
    experienceWork: '11 лет',
    shortDescription: 'Выступающий спортсмен и тренер. Поможет набрать мышечную массу или похудеть!',
    description: `Опыт работы: 11 лет<br>
        Программы:<br>
        Персональные тренировки для женщин <br>
        Персональные тренировки для мужчин<br>
        Подготовка к соревнованиям по бодибилдингу, бодифитнесу, фитнесбикини <br>
        Набор мышечной массы и похудение<br>
        Выступающий бодибилдер. За эстетикой, красотой и прорисованностью мышц только к нему! Большой опыт работы тренером позволяет ему работать с людьми любой физической подготовки. Но, самое главное, Михаил работает с уже опытными спортсменами и помогает им в решении их спортивных задач. Подготовит к соревнованиям и выведет на сцену бодибилдера, бодифитнес и фитнес бикини!<br>
        Хотите эстетичное, красивое и здоровое тело? Попробуйте тренинг с Михаилом!`,
    imgSrc: '/wp-content/themes/imperium/assets/images/content/trainer-slider-6.jpg',
    id: 'trainer9'
  },
}

export default TrainersData;