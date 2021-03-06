<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vacancies')->insert([
            'name' => 'Администратор магазина',
            'salary' => '31000',
            'experience' => 'не требуется',

            'offer' => 'Работу в дружном коллективе;Возможность карьерного роста;Премии по результатам работы;
            Бесплатное питание для наших сотрудников;Бесплатная корпоративная одежда;Бесплатное такси в вечернее время;Компенсация расходов за медицинскую книжку;',

            'responsibilities' => 'обеспечение бесперебойной работы магазина;управление персоналом в магазине (составление графиков, ведение табеля рабочего;
            времени, контроль выполнения стандартов продавцами, кассирами, организация адаптации стажеров).;
            работа с покупателями (оказание помощи покупателем, предотвращение и устранение конфликтных ситуаций);
            работа в зале (выставка товара, контроль наличия ценников);контроль выполнения поставленных задач;',

            'requirements' => 'Умение работать в команде;Лидерские качества;Стрессоустойчивость;Ответственность;Стремление к карьерному росту ;Культура общения;',

            'conditions' => 'трудоустройство согласно ТК РФ;график работы сменный;соц.пакет;',
            'category_id' => 1,
            'address' => 'г. Чита, ул. Профсоюзная, 25',
        ]);

        DB::table('vacancies')->insert([
            'name' => 'Работник торгового зала',
            'salary' => '30000',
            'experience' => 'не требуется',

            'offer' => 'Работу в дружном коллективе;Возможность карьерного роста;Премии по результатам работы;
            Бесплатное питание для наших сотрудников;Бесплатная корпоративная одежда;Бесплатное такси в вечернее время;Компенсация расходов за медицинскую книжку;',

            'responsibilities' => 'Встреча, консультирование, сопровождение покупателей на всех этапах продаж;
            Выкладка товара в торговом зале;Контроль качества, контроль сроков годности, ротация товара;Контроль наличия и корректности ценников;
            Соблюдение корпоративных стандартов обслуживания покупателей;Соблюдение чистоты в торговом зале;',

            'requirements' => 'Аккуратность, доброжелательность и вежливость в общении с покупателями;
            Приветствуется стремление к обучению и развитию;Умение работать в команде;Готовность к физической работе;',

            'conditions' => 'трудоустройство согласно ТК РФ;график работы сменный;соц.пакет;',
            'category_id' => 1,
            'address' => 'г. Чита, ул. Профсоюзная, 25',
        ]);

        DB::table('vacancies')->insert([
            'name' => 'Кассир',
            'salary' => '28000',
            'experience' => 'не требуется',

            'offer' => 'Работу в дружном коллективе;Возможность карьерного роста;Премии по результатам работы;
            Бесплатное питание для наших сотрудников;Бесплатная корпоративная одежда;Бесплатное такси в вечернее время;Компенсация расходов за медицинскую книжку;',

            'responsibilities' => 'Обслуживание клиентов на кассе;Помощь клиентам по различным вопросам;
            Контроль качества, контроль сроков годности, ротация товара;Пополнение товарного ассортимента в прикассовой зоне;
            Контроль наличия и корректности ценников;Соблюдение корпоративных стандартов обслуживания покупателей;Соблюдение чистоты в торговом зале',

            'requirements' => 'Любить людей;Аккуратность, доброжелательность и вежливость в общении с покупателями;
            Приветствуется стремление к обучению и развитию;Умение работать в команде;Готовность к физической работе;',

            'conditions' => 'трудоустройство согласно ТК РФ;график работы сменный;соц.пакет;',
            'category_id' => 1,
            'address' => 'г. Чита, ул. Профсоюзная, 25',
        ]);

        DB::table('vacancies')->insert([
            'name' => 'Продавец гастронома',
            'salary' => '30000',
            'experience' => 'не требуется',

            'offer' => 'Работу в дружном коллективе;Возможность карьерного роста;Премии по результатам работы;
            Бесплатное питание для наших сотрудников;Бесплатная корпоративная одежда;Бесплатное такси в вечернее время;Компенсация расходов за медицинскую книжку;',

            'responsibilities' => 'Обслуживание клиентов за прилавком гастронома;Помощь покупателям по различным вопросам;
            Контроль качества, контроль сроков годности, ротация товара;Пополнение товарного ассортимента в отделе гастроном;
            Контроль наличия и корректности ценников;Соблюдение корпоративных стандартов обслуживания покупателей;Соблюдение чистоты в торговом зале',

            'requirements' => 'Любить людей;Аккуратность, доброжелательность и вежливость в общении с покупателями;
            Приветствуется стремление к обучению и развитию;Умение работать в команде;Готовность к физической работе;',

            'conditions' => 'трудоустройство согласно ТК РФ;график работы сменный;соц.пакет;',
            'category_id' => 1,
            'address' => 'г. Чита, ул. Профсоюзная, 25',
        ]);

        DB::table('vacancies')->insert([
            'name' => 'Контролер Торгового Зала',
            'salary' => '25500',
            'experience' => 'не требуется',

            'offer' => 'Работу в дружном коллективе;Возможность карьерного роста;Премии по результатам работы;
            Бесплатное питание для наших сотрудников;Бесплатная корпоративная одежда;Бесплатное такси в вечернее время;Компенсация расходов за медицинскую книжку;',

            'responsibilities' => 'Предотвращение хищений;Обеспечение безопасности работников и посетителей торгового объекта;
            Требовать соблюдение правил общественного порядка в торговом зале',

            'requirements' => 'Аккуратность, доброжелательность и вежливость в общении с покупателями;Умение работать в команде;',

            'conditions' => 'трудоустройство согласно ТК РФ;график работы сменный;соц.пакет;',
            'category_id' => 1,
            'address' => 'г. Чита, ул. Профсоюзная, 25',
        ]);

        DB::table('vacancies')->insert([
            'name' => 'Приемщик',
            'salary' => '35000',
            'experience' => 'не требуется',

            'offer' => 'Работу в дружном коллективе;Возможность карьерного роста;Премии по результатам работы;
            Бесплатное питание для наших сотрудников;Бесплатная корпоративная одежда;Бесплатное такси в вечернее время;Компенсация расходов за медицинскую книжку;',

            'responsibilities' => 'приемка товара;правильное складирование товара;контроль сроков годности при приёмке товара.',

            'requirements' => 'Аккуратность, доброжелательность и вежливость в общении с покупателями;Умение работать в команде;',

            'conditions' => 'трудоустройство согласно ТК РФ;график работы сменный;соц.пакет;',
            'category_id' => 1,
            'address' => 'г. Чита, ул. Профсоюзная, 25',
        ]);
    }
}
