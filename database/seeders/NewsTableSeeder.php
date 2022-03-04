<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $news = 
        [
            [
                'title' => 'Eventos sociais e esportivos controlados são liberados sem limitação de público no Ceará',
                'caption' => 'O governador Camilo Santana (PT) anunciou novas medidas de combate à pandemia da Covid-19 no Ceará',
                'body' => 'Eventos sociais e esportivos são liberados sem limitação de público no Ceará a partir do dia 7 de março. Os locais, no entanto, devem exigir o comprovante da vacinação da 3ª dose e uso obrigatório de máscara. As medidas foram anunciadas nesta sexta-feira, 4, pelo governador Camilo Santana (PT). Conforme Camilo, são liberados os eventos que possam ser controlados respeitando a capacidade dos espaçoss',
                'type' => 'Coronavírus',
                'media' => 'https://www.opovo.com.br/_midias/jpg/2021/08/06/818x460/1_camilo_cabeto_decreto_isolamento-16764360.jpg?20210806135949?20210806135949',
                'created_at' => '2022-01-10 15:21:20',
                'updated_at' => '2022-01-10 15:21:20'
            ],
            [
                'title' => 'Rússia diz ser mentira acusação de ataque à usina nuclear na Ucrânia',
                'caption' => 'Embaixador reconheceu que há confrontos na área da usina, mas não bombardeios',
                'body' => 'O embaixador russo na ONU, Vassily Nebenzia, chamou de "mentira" que a Rússia tenha atacado a usina nuclear de Zaporizhzhia, na Ucrânia, em uma reunião de emergência do Conselho de Segurança para analisar a situação.',
                'type' => 'Mundo',
                'media' => 'https://www.opovo.com.br/_midias/jpg/2022/03/04/818x460/1_usina_ucrania_003_-18233519.jpg',
                'created_at' => '2022-02-08 10:33:20',
                'updated_at' => '2022-02-08 10:33:20'
            ],
            [
                'title' => 'Autoamor e vulnerabilidade: como melhorar suas relações com os outros e com você mesmo',
                'caption' => 'Em suas colunas no OP+, o terapeuta Guilherme Ashara comenta sobre temas como vulnerabilidade e autoamor numa visão sistêmica',
                'body' => 'Traumas na infância, na adolescência e mesmo no início da vida adulta podem ter impactos relevantes na forma como as pessoas lidam com suas relações e se percebem na sociedade. Por isso, buscar formas de lidar com o que passou é essencial para levar uma vida mais saudável e leve. Semanalmente, o psicoterapeuta Guilherme Ashara compartilha reflexões sobre temas como autoamor, traumas e vulnerabilidade em sua coluna no O POVO Mais, plataforma multistreaming do O POVO. Confira resumos dos últimos textos publicados com exclusividade para assinantes',
                'type' => 'Especial Publicitario',
                'media' => 'https://www.opovo.com.br/_midias/png/2022/03/03/818x460/1_captura_de_tela_2022_03_03_a__s_21_43_32-18232110.png',
                'created_at' => '2022-03-01 17:35:40',
                'updated_at' => '2022-03-01 17:35:40'
            ]
        ];

        DB::table('news')->insert($news);
    }
}
