'use strict'

window.addEventListener('DOMContentLoaded', ()=> {

    // === HEADER === \\\
    let header = document.querySelector('header'),
        headerBurger = document.querySelector('.burger'),
        headerMenu = header.querySelector('.header__menu')

    window.addEventListener('scroll', ()=>{
        if (window.pageYOffset > 0 ){
            header.classList.add('_scroll')
        }
        else{
            header.classList.remove('_scroll')
        }
    })

    headerBurger.addEventListener('click', toggleMenu)
    function toggleMenu() {
        headerMenu.classList.toggle('_active')
        headerBurger.classList.toggle('_active')
        document.body.classList.toggle('lock')
    }
    function closeMenu() {
        headerMenu.classList.remove('_active')
        headerBurger.classList.remove('_active')
        document.body.classList.remove('lock')
    }
    document.addEventListener('click', (e) => {
        let withinBoundaries = e.composedPath().includes(headerMenu);
            
        if ( !withinBoundaries && !e.composedPath().includes(headerBurger)) {
            closeMenu()
        }
    })


    // === SLICK SLIDER === \\\
    $('.projects__list').slick({
        arrows : true,
        dots: false,
        // appendDots: categoriesDots,
        slidesToShow: 3,
        variableWidth: true,
        appendArrows: document.querySelector('.projects__arrows'),
        prevArrow: '<button class="slider__toggle _prev"><i class="slider__icon icon-arrow2-left"></i></button>',
        nextArrow: '<button class="slider__toggle _next"><i class="slider__icon icon-arrow2-right"></i></button>',
        infinite: true,
        responsive: [
            {
              breakpoint: 992.1,
              settings: {
                slidesToShow: 2,
                variableWidth: false,
              }
            },
            {
              breakpoint: 480.1,
              settings: {
                slidesToShow: 1,
                variableWidth: false,
                appendArrows: document.querySelector('.projects__arrows '),
              }
            },
            // {
            //   breakpoint: 360.1,
            //   settings: {
            //       slidesToShow: 1,
            //   }
            // }
        ]
    })
    $('.collaborates__list').slick({
        arrows : false,
        dots: true,
        slidesToShow: 1,
        appendDots: document.querySelector('.collaborates__dots'),
        infinite: true,
        customPaging : function(slider, i) {
            return ' <div></div>';
        },
        // responsive: [
        //     {
        //       breakpoint: 768.1,
        //       settings: {
        //           slidesToShow: 2,
        //       }
        //     },
        //     {
        //       breakpoint: 360.1,
        //       settings: {
        //           slidesToShow: 1,
        //       }
        //     }
        // ]
    })
    $('.team__list').slick({
        arrows : true,
        dots: false,
        slidesToShow: 1,
        appendArrows: document.querySelector('.team__arrows'),
        prevArrow: '<button class="slider__toggle _prev"><i class="slider__icon icon-arrow2-left"></i></button>',
        nextArrow: '<button class="slider__toggle _next"><i class="slider__icon icon-arrow2-right"></i></button>',
        infinite: true,
        // responsive: [
        //     {
        //       breakpoint: 768.1,
        //       settings: {
        //           slidesToShow: 2,
        //       }
        //     },
        //     {
        //       breakpoint: 360.1,
        //       settings: {
        //           slidesToShow: 1,
        //       }
        //     }
        // ]
    })

    // === DROPDOWN === \\
    let dropdowns = document.querySelectorAll('.dropdown') 
    dropdowns.forEach(item => dropdown(item))
    function dropdown(dropdown) {
        let title = dropdown.querySelector('.dropdown__title'),
            titleText = dropdown.querySelector('.dropdown__title_text'),
            items = dropdown.querySelectorAll('.dropdown__item')

        title.addEventListener('click', ()=>{ dropdown.classList.toggle('_open') })

        if (items) {
            items.forEach(item => {
                item.addEventListener('click', ()=>{
                    // titleText.textContent = item.textContent
                    items.forEach(i => {  i.classList.remove('_active')  })
                    item.classList.add('_active')
                    dropdown.classList.remove('_open')
                })
            })
        }

        document.addEventListener('click', (e) => {
            let withinBoundaries = e.composedPath().includes(dropdown);
                
            if (!withinBoundaries) {
                dropdown.classList.remove('_open')
            }
        })
    }
    
    // === TABS === \\
    let tabs = document.querySelectorAll('.tabs')
    tabs.forEach(item => {
        let tabsTitles = item.querySelectorAll('.tabs__title'),
            tabsItems = item.querySelectorAll('.tabs__item')

        tabsTitles.forEach(title => {
            title.addEventListener('click', ()=>{
                for (let n = 0; n < tabsTitles.length; n++){
                    if (tabsTitles[n] == title){
                        tabsTitles[n].classList.add('_active')
                        tabsItems[n].classList.add('_active')
                    }
                    else {
                        tabsTitles[n].classList.remove('_active')
                        tabsItems[n].classList.remove('_active')
                    }
                }
            })
        })
    })

    // === CONTAINER INDENT === \\\
    document.body.style.setProperty('--containerPositionIndent', document.querySelector('.startpage__container').offsetLeft + 'px');

    // === ANIMATIONS === \\\
    let blocks = document.querySelectorAll('section');
 
    function checkBlocksVisibility() {
        let windowHeight = window.innerHeight;
 
        blocks.forEach(block => {
            let blockPosition = block.getBoundingClientRect().top;
 
            if (blockPosition < windowHeight * 0.9) {
                block.style.opacity = "1";
                block.style.transform = "translateY(0)";
            }
        });
    }
 
    checkBlocksVisibility();
 
    window.addEventListener('scroll', checkBlocksVisibility);

    // === TRANSLATE === \\\
    // var translateStatus = 'eng'
    // let translateSwitch = document.querySelector('.change')
    // let translateData = [
    //         {
    //             ru: 'Увеличение доступности',
    //             eng: 'Increased accessibility',
    //             element: '#business_item1 > h4',
    //             position: 0
    //         },
    //         {
    //             ru: 'Мобильные приложения делают ваш бизнес доступным для клиентов в любое время и в любом месте. Ваши клиенты могут легко получить доступ к вашим услугам или товарам, просто открыв приложение на своем смартфоне.',
    //             eng: 'Mobile apps make your business available to your customers anytime and anywhere. Your customers can easily access your services or products by simply opening the app on their smartphone. ',
    //             element: '#business_item1 > p',
    //             position: 0
    //         },
    //         {
    //             ru: 'Улучшенный маркетинг и взаимодействие с клиентами',
    //             eng: 'Improved marketing and customer interaction',
    //             element: '#business_item2 > h4',
    //             position: 0
    //         },
    //         {
    //             ru: 'Вы можете отправлять им уведомления о специальных предложениях, акциях и новых продуктах, что способствует увеличению лояльности клиентов.',
    //             eng: 'You can send them notifications about special offers, promotions and new products, which helps to increase customer loyalty.',
    //             element: '#business_item2 > p',
    //             position: 0
    //         },
    //         {
    //             ru: 'Повышение удобства и персонализации',
    //             eng: 'Increased convenience and personalization',
    //             element: '#business_item3> h4',
    //             position: 0
    //         },
    //         {
    //             ru: 'Мобильные приложения позволяют создавать персонализированные предложения и услуги для каждого клиента на основе их предпочтений и истории взаимодействия с вашим брендом.',
    //             eng: 'Mobile apps allow you to create personalised offers and services for each customer based on their preferences and history of interaction with your brand.',
    //             element: '#business_item3 > p',
    //             position: 0
    //         },
    //         {
    //             ru: 'Конкурентное преимущество',
    //             eng: 'Competitive advantage',
    //             element: '#business_item4> h4',
    //             position: 0
    //         },
    //         {
    //             ru: 'В настоящее время мобильные приложения уже стали стандартом для большинства бизнесов. Те, кто не использует этот инструмент, рискует отставать от конкурентов.',
    //             eng: `Nowadays, mobile apps have already become a standard for most businesses. Those that don't utilise this tool risk falling behind the competition.`,
    //             element: '#business_item4 > p',
    //             position: 0
    //         },
    //         {
    //             ru: `Наша студия специализируется на <span class="_color-blue">MVP</span>`,
    //             eng: `Our Studio Specialises In <span class="_color-blue">MVPs</span>`,
    //             element: `body > section.studio > div > div.studio__info > h2.studio__title`,
    //             position: 0
    //         },
    //         {
    //             ru: `             `,
    //             eng: `             `,
    //             element: `body > section.studio > div > div.studio__info > h5.studio__subtitle`,
    //             position: 0
    //         },
    //         {
    //             ru: `             `,
    //             eng: `             `,
    //             element: `             `,
    //             position: 0
    //         },
    //         {
    //             ru: `             `,
    //             eng: `             `,
    //             element: `             `,
    //             position: 0
    //         },
    //         // {
    //         //     ru: `             `,
    //         //     eng: `             `,
    //         //     element: `             `,
    //         //     position: 0
    //         // },
    //         // {
    //         //     ru: `             `,
    //         //     eng: `             `,
    //         //     element: `             `,
    //         //     position: 0
    //         // },
    //         // {
    //         //     ru: `             `,
    //         //     eng: `             `,
    //         //     element: `             `,
    //         //     position: 0
    //         // },
    //         // {
    //         //     ru: `             `,
    //         //     eng: `             `,
    //         //     element: `             `,
    //         //     position: 0
    //         // },
    //         // {
    //         //     ru: `             `,
    //         //     eng: `             `,
    //         //     element: `             `,
    //         //     position: 0
    //         // },
    //         // {
    //         //     ru: `             `,
    //         //     eng: `             `,
    //         //     element: `             `,
    //         //     position: 0
    //         // },
    //         // {
    //         //     ru: `             `,
    //         //     eng: `             `,
    //         //     element: `             `,
    //         //     position: 0
    //         // }
    //     ]

    // translateSwitch.addEventListener('click', ()=>{
    //     if (translateStatus == 'ru') {
    //         translateData.forEach(item => {
    //             document.querySelectorAll(item['element'])[item['position']].innerHTML = item['eng']
    //         })
    //         translateStatus = 'eng'
    //         return translateStatus
    //     }
    //     if (translateStatus == 'eng') {
    //         translateData.forEach(item => {
    //             document.querySelectorAll(item['element'])[item['position']].innerHTML = item['ru']
    //         })
    //         translateStatus = 'ru'
    //         return translateStatus
    //     }
    // })
    
    var translateStatus = 'eng'
    let translateSwitch = document.querySelector('.change'),
        translateData = [
            {
                ru: 'Мобильное приложение <span class="_color-blue">ключевой инструмент вашего бизнеса</span>',
                eng: 'A mobile app is a <span class="_color-blue">key tool for your business</span>',
            },
            {
                ru: 'Увеличение доступности',
                eng: 'Increased accessibility',
            },
            {
                ru: 'Мобильные приложения делают ваш бизнес доступным для клиентов в любое время и в любом месте. Ваши клиенты могут легко получить доступ к вашим услугам или товарам, просто открыв приложение на своем смартфоне.',
                eng: 'Mobile apps make your business available to your customers anytime and anywhere. Your customers can easily access your services or products by simply opening the app on their smartphone.',
            },
            {
                ru: 'Улучшенный маркетинг и взаимодействие с клиентами',
                eng: 'Improved marketing and customer interaction',
            },
            {
                ru: 'Вы можете отправлять им уведомления о специальных предложениях, акциях и новых продуктах, что способствует увеличению лояльности клиентов.',
                eng: 'You can send them notifications about special offers, promotions and new products, which helps to increase customer loyalty.',
            },
            {
                ru: 'Повышение удобства и персонализации',
                eng: 'Increased convenience and personalization',
            },
            {
                ru: 'Мобильные приложения позволяют создавать персонализированные предложения и услуги для каждого клиента на основе их предпочтений и истории взаимодействия с вашим брендом.',
                eng: 'Mobile apps allow you to create personalised offers and services for each customer based on their preferences and history of interaction with your brand.',
            },
            {
                ru: 'Конкурентное преимущество',
                eng: 'Competitive advantage',
            },
            {
                ru: 'В настоящее время мобильные приложения уже стали стандартом для большинства бизнесов. Те, кто не использует этот инструмент, рискует отставать от конкурентов.',
                eng: `Nowadays, mobile apps have already become a standard for most businesses. Those that don't utilise this tool risk falling behind the competition.`,
            },
            {
                ru: `Наша студия специализируется на <span class="_color-blue">MVP</span>`,
                eng: `Our Studio Specialises In <span class="_color-blue">MVPs</span>`,
            },
            {
                ru: `Мы приложим все усилия чтобы ваше выпустить ваше приложение в кратчайшие сроки с необходимом функционалом и качественным дизайном.`,
                eng: `We will make every effort to release your app in the shortest possible time with the necessary functionality and quality design.`,
            },
            {
                ru: `Что вы <span class="_color-blue">получите</span>`,
                eng: `What you <span class="_color-blue">get</span>`,
            },
            {
                ru: `Качественное приложение`,
                eng: `Excellence In App Development`,
            },
            {
                ru: `Вы получите высококачественное приложение, разработанное с применением лучших технологий. Наша команда стремится к безупречности в каждом аспекте приложения, чтобы обеспечить надежность и эффективность.`,
                eng: `Quality Application You will get a high quality application developed with the best technology. Our team strives for flawlessness in every aspect of the app to ensure reliability and efficiency.
            `,
            },
            {
                ru: `Скорость разработки`,
                eng: `Speed of development`,
            },
            {
                ru: `Наш подход к разработке основан на эффективности и оптимизации времени. Мы стремимся минимизировать время от идеи до реализации, предлагая быстрые сроки выполнения проекта без потери качества. Это позволяет вам получить ваш продукт на рынок быстрее и опережать конкурентов.`,
                eng: `Our development approach is based on efficiency and time optimisation. We aim to minimise the time from idea to implementation, offering fast project turnaround times without sacrificing quality. This allows you to get your product to market faster and ahead of the competition.`,
            },
            {
                ru: `Правильный UX/UI дизайн`,
                eng: `Proper UX/UI design`,
            },
            {
                ru: `Экспертное мнение`,
                eng: `Expert Opinion`,
            },
            {
                ru: `Мы предоставляем не только техническое исполнение, но и экспертное мнение по всем аспектам разработки. Наша команда профессионалов готова поделиться своим опытом и рекомендациями, чтобы ваш проект был не только успешным, но и долгосрочно устойчивым.`,
                eng: `Your app will not only have outstanding functionality, but also an attractive appearance. We pay special attention to design, creating a user-friendly and colourful interface that will provide a pleasant user experience.`,
            },
            {
                ru: `Как мы работаем`,
                eng: `How we work`,
            },
            {
                ru: `Обсуждение будущего продукта`,
                eng: `Discussing the future product`,
            },
            {
                ru: `Вместе определим цели и приоритеты, разобьём проект на этапы и определим необходимый базовый функционал MVP для быстрой проверки гипотез вашей бизнес-модели. Составим детальное Техническое задание и предварительное коммерческое предложение на каждый из этапов создания/развития проекта.`,
                eng: `Together we will define goals and priorities, divide the project into stages and define the necessary basic MVP functionality to quickly test the hypotheses of your business model. We will draw up a detailed Terms of Reference and a preliminary commercial proposal for each of the stages of project creation/development.`,
            },
            {
                ru: `Создание Дизайна и прототипа`,
                eng: `Design and prototype creation`,
            },
            {
                ru: `Создадим дизайн и кликабельный прототип интерфейса будущего сервиса. Мы воспроизведём структуру сервиса и сможем вместе продумать основные сценарии пользовательского поведения. Прототипирование позволит учесть максимум мелочей, тем самым сэкономив часы на дальнейших этапах.`,
                eng: `We will create a design and clickable prototype of the interface of the future service. We will reproduce the structure of the service and together we will be able to think through the main scenarios of user behaviour. Prototyping will allow us to take into account maximum details, thus saving hours at further stages.`,
            },
            {
                ru: `Разработка проекта`,
                eng: `Project development`,
            },
            {
                ru: `После внесения необходимых корректировок в документации и дизайна, дадим итоговые оценки этапов по времени и стоимости. Соберём из наших сотрудников команду, ответственную за разработку продукта, составим и подпишем необходимые документы (договоры и приложения со сметами) и начнем реализовывать вашу идею в реальный продукт гарантируя качество и поэтапную отчетность в процессе работы`,
                eng: `After making the necessary adjustments to the documentation and design, we will give final estimates of the stages in terms of time and cost. We will assemble a team of our employees responsible for product development, draw up and sign the necessary documents (contracts and annexes with estimates) and start implementing your idea into a real product, guaranteeing quality and step-by-step reporting during the work process.`,
            },
            {
                ru: `Тестирование > Запуск > Тех поддержка`,
                eng: `Testing > Launch > Tech Support`,
            },
            {
                ru: `Проводим функциональное тестирование на наличие багов. Адаптируем приложение на разные разрешения телефонов. Оформляем страницу приложения и публикуем в магазины App Store и Google Play. Следим за стабильностью работы приложения осуществляя тех поддержку.`,
                eng: `We conduct functional testing for bugs. Adapt the application for different phone resolutions. We design the application page and publish it to the App Store and Google Play shops. We monitor the stability of the application by providing technical support.`,
            },
            {
                ru: `Преимущества нашей студии`,
                eng: `Advantages of our studio`,
            },
            {
                ru: `Высокий рейтинг в сторах. Все пользователи высоко оценивают качество и дизайн наших приложений`,
                eng: `High rating in Stores All users highly appreciate the quality and design of our applications`,
            },
            {
                ru: `Работаем с AI. Опыт работы интеграцией Chat GPT, Gemini, Midjorney`,
                eng: `Working with AI Experience with Chat GPT, Gemini, Midjorney integration.`,
            },
            {
                ru: `Большой опыт в разработке приложений. Наша команда в сфере IT и разработки приложений более 5 лет`,
                eng: `Extensive experience in app development Our team has been in IT and app development for over 5 years.`,
            },
            {
                ru: `Разрабатываем на Flutter и FlutterFlow. Приложение будет работать как на iOS так и Android и значительно ускорит время разработки.`,
                eng: `We develop on Flutter and FlutterFlow The app will work on both iOS and Android and will significantly speed up development time.`,
            },
            {
                ru: `Всегда готовы помочь. Мы всегда готовы помочь, объяснить, настроить или просто поговорить. Ваш комфорт – наш приоритет!`,
                eng: `Always ready to help We are always ready to help, explain, customise or just talk. Your comfort is our priority!`,
            },
            {
                ru: `Наши <span class="_color-blue">работы</span>`,
                eng: `Our Recent <span class="_color-blue">Work</span>`,
            },
            {
                ru: `Часто Задаваемые вопросы <span class="_color-blue">(FAQ)</span>`,
                eng: `Frequently Asked Questions <span class="_color-blue">(FAQ)</span>`,
            },
            {
                ru: `Какой бюджет я должен выделить на запуск приложения?`,
                eng: `What budget should I allocate for launching an app?`,
            },
            {
                ru: `Бюджет на запуск приложения может сильно варьироваться в зависимости от требуемого функционала, сложности дизайна, платформы (iOS, Android или обе) и других факторов. Мы готовы обсудить ваши требования и предложить оптимальное решение, которое соответствует вашему бюджету.`,
                eng: `The budget for launching an app can vary greatly depending on the required functionality, complexity of design, platform (iOS, Android or both) and other factors. We are ready to discuss your requirements and come up with the best solution that fits your budget.`,
            },
            {
                ru: `Сколько времени потребуется для создания приложения?`,
                eng: `How much time will it take to create an app?`,
            },
            {
                ru: `Время разработки приложения также зависит от его сложности и требований. Мы обычно предоставляем оценку времени после тщательного изучения вашего проекта.`,
                eng: `How much time will it take to create an app?`,
            },
            {
                ru: `Почему так быстро вы сможете запустить приложение?`,
                eng: `Why will you be able to launch the app so quickly?`,
            },
            {
                ru: `Наша команда имеет богатый опыт в разработке мобильных приложений и использует современные методы разработки, что позволяет нам оптимизировать процесс и достигать быстрых результатов без ущерба качеству.`,
                eng: `Our team has extensive experience in mobile app development and uses modern development methods, which allows us to optimise the process and achieve fast results without compromising on quality.`,
            },
            {
                ru: `Что от меня нужно, чтобы начать разработку мобильного приложения?`,
                eng: `What do I need from me to start mobile app development?`,
            },
            {
                ru: `Для начала разработки мы нуждаемся в детальном описании вашей идеи или требований к приложению. Чем более подробно вы опишете свои ожидания, тем лучше мы сможем воплотить их в реальность.`,
                eng: `To start development, we need a detailed description of your idea or requirements for the app. The more detailed you describe your expectations, the better we can turn them into reality.`,
            },
            {
                ru: `Осуществляете ли вы поддержку продукта после запуска?`,
                eng: `Do you provide post-launch product support?`,
            },
            {
                ru: `Да, мы предлагаем услуги поддержки продукта после его запуска. Это включает в себя исправление ошибок, обновление функционала, адаптацию под новые версии операционных систем и другие необходимые работы для поддержания приложения в актуальном состоянии.`,
                eng: `Yes, we offer post-launch support services. This includes bug fixes, functionality updates, adaptation to new versions of operating systems and other necessary work to keep the application up to date.`,
            },
            {
                ru: `Подпишете ли вы соглашение о неразглашении?`,
                eng: `Will you sign a non-disclosure agreement?`,
            },
            {
                ru: `Да, мы готовы подписать соглашение о неразглашении (NDA), чтобы обеспечить конфиденциальность вашей идеи и всех связанных с ней данных. Ваша безопасность и уверенность в сохранении конфиденциальности являются для нас приоритетом`,
                eng: `Yes, we are ready to sign a non-disclosure agreement (NDA) to ensure the confidentiality of your idea and all related data. Your safety and confidence in maintaining your confidentiality is our priority.`,
            },
            {
                ru: `Всеволод Коргин`,
                eng: `Vsevolod Korgin`,
            },
            {
                ru: `Соучредитель (Отдел по работе с клиентами)`,
                eng: `Co-founder (Client Service)`,
            },
            {
                ru: `В продажах и управлении IT проектами с 2005 года`,
                eng: `In sales and IT project management since 2005`,
            },
            {
                ru: `Кайфую от упаковки и структурирования идеи клиента, вижу детали и развилки благодаря своему разностороннему накопленному опыту;`,
                eng: `I get high from packaging and structuring the client's idea, I see details and forks thanks to my versatile accumulated experience;`,
            },
            {
                ru: `Максимально оперативно, профессионально и с индивидуальным подходом доведу Вашу идею до наилучшего результата`,
                eng: `I will bring your idea to the best result as quickly as possible, professionally and with an individual approach`,
            },
            {
                ru: `Помогу подобрать оптимальный набор  инструментов и решений как по деньгам, так и по наполнению для крутой  реализации Вашей идеи.`,
                eng: `I will help you to choose the optimal set of tools and solutions both in terms of money and content for the cool realization of your idea.`,
            },
            {
                ru: `Студия это мечта, к которой я шёл всю свою жизнь, ради которой я накапливал опыт и набивал шишки`,
                eng: `Studio is a dream, to which I have been going all my life, for the sake of which I have been accumulating experience and kicking up bumps.`,
            },
            // {
            //     ru: `             `,
            //     eng: `             `,
            // },
            // {
            //     ru: `             `,
            //     eng: `             `,
            // },
            // {
            //     ru: `             `,
            //     eng: `             `,
            // },
            // {
            //     ru: `             `,
            //     eng: `             `,
            // },
            // {
            //     ru: `             `,
            //     eng: `             `,
            // },
            // {
            //     ru: `             `,
            //     eng: `             `,
            // },
            // {
            //     ru: `             `,
            //     eng: `             `,
            // },
            // {
            //     ru: `             `,
            //     eng: `             `,
            // },
            // {
            //     ru: `             `,
            //     eng: `             `,
            // },
            // {
            //     ru: `             `,
            //     eng: `             `,
            // },
            // {
            //     ru: `             `,
            //     eng: `             `,
            // },
        ]
        
    translateSwitch.addEventListener('click', ()=>{
        if (translateStatus == 'ru') {
            translateData.forEach(item => {
                changeText(item['ru'], item['eng'])
            })
            translateStatus = 'eng'
            return translateStatus
        }
        if (translateStatus == 'eng') {
            translateData.forEach(item => {
                changeText(item['eng'], item['ru'])
            })
            translateStatus = 'ru'
            return translateStatus
        }
    })
    let nodes = []
    document.querySelectorAll('*').forEach(item => {
        if (item.innerHTML.trim().split("\n")[0].length > 0 ){
            nodes.push(item)
        }
    })
    function changeText(oldText, newText) {
        try {
            let correctNodes = []
            nodes.forEach(node => {
                if (node.innerHTML.replace(/[^a-zA-Z]+/g, '').toLowerCase() == (oldText.replace(/[^a-zA-Z]+/g, '').toLowerCase())) {
                    correctNodes.push(node)
                }
            })
            correctNodes = correctNodes.reverse()
            let arr = []
            for (let n = 0; n < correctNodes.length - 1; n++){
                // console.log(correctNodes[n]);
                if (correctNodes[n].innerHTML == correctNodes[0].innerHTML) {
                    arr.push(correctNodes[n])
                }
            }
            if (arr.length > 1){
                arr.forEach(item => {
                    item.innerHTML = newText
                })
                console.log(arr);
            }
            else{
                correctNodes[0].innerHTML = newText
            }
            // correctNodes[0].innerHTML = newText
            
        }
        catch(err){
            console.log(err);
        }
    }

    function charCount(str, char) {
        var count = 0;
        for(var i = str.length; i--;) {
          if(str[i] === char) count++;
        }
        return count;
      }
    function cleanText(str) {
        for (let n = 0; n < str.split('</').length; n++){
            str = str.replace(str.slice(str.indexOf('<'),str.indexOf('>')+1), "")
            str = str.replace(str.slice(str.indexOf('</'),str.indexOf('>')+1), "")
        }
        return str
    }
    // === RADIO BUTTONS === \\
    // let radios = document.querySelectorAll('.radio')

    // radios.forEach(item => {radio(item)})
    // function radio(radio) {
    //     let radioItems = radio.querySelectorAll('.radio__item')
    //     radioItems.forEach(item =>{
    //         item.addEventListener('click', ()=>{
    //             radioItems.forEach(i => {i.classList.remove('_active')})
    //             item.classList.add('_active')
    //         })
    //     })
    // }

    // === INPUT MASK === \\\
    // $(elem).mask("9999 9999 9999 9999")
    
    // === CHECK EMAIL === \\\
    // function checkEmail(email) {
    //     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //     if (!re.test(email.value)){
    //         email.parentNode.classList.add('_error')
    //         email.scrollIntoView({
    //             behavior: 'smooth',
    //             block: 'center'
    //         });
    //         return false
    //     }
    //     else{
    //         email.parentNode.classList.remove('_error')
    //         return true
    //     }
    // }

    // === DYNAMIC ADAPTIVE === \\
    function mediaQueries() {
        if (window.matchMedia('(max-width: 1440px)').matches){
            
        }
        if (window.matchMedia('(max-width: 1024px)').matches){
            
        }
        if (window.matchMedia('(max-width: 768px)').matches){
            
        }
        if (window.matchMedia('(max-width: 576px)').matches){
            
        }
        if (window.matchMedia('(max-width: 360px)').matches){
            
        }
    };
    
    mediaQueries()
    window.addEventListener('resize', mediaQueries)
})