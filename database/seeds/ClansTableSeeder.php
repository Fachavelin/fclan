<?php

use Illuminate\Database\Seeder;
use App\Clan;
use App\Juego;
use App\Pais;
use App\User;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;

class ClansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        Clan::truncate();
        Juego::truncate();
        Pais::truncate();


        


        $juego = new Juego;
        $juego -> nombre = "Rainbox 6";
        $juego -> save();
       
        $juego = new Juego;
        $juego -> nombre = "Counter Strike";
        $juego -> save();

        $juego = new Juego;
        $juego -> nombre = "Dota 2";
        $juego -> save();

        $juego = new Juego;
        $juego -> nombre = "Overwatch";
        $juego -> save();

        $juego = new Juego;
        $juego -> nombre = "Starcraft 2";
        $juego -> save();

        $juego = new Juego;
        $juego -> nombre = "Rocket League";
        $juego -> save();

        $juego = new Juego;
        $juego -> nombre = "World of Warcraft";
        $juego -> save();

        $juego = new Juego;
        $juego -> nombre = "HearthStone";
        $juego -> save();

        $juego = new Juego;
        $juego -> nombre = "League of legends";
        $juego -> save();

        $juego = new Juego;
        $juego -> nombre = "COD Mobile";
        $juego -> save();

        $pais = new Pais;
        $pais -> nombre = "Ecuador";
        $pais ->save();

        $pais = new Pais;
        $pais -> nombre = "Colombia";
        $pais ->save();

        $pais = new Pais;
        $pais -> nombre = "Peru";
        $pais ->save();

        $pais = new Pais;
        $pais -> nombre = "Venezuela";
        $pais ->save();

        $pais = new Pais;
        $pais -> nombre = "Argentina";
        $pais ->save();

        $pais = new Pais;
        $pais -> nombre = "Chile";
        $pais ->save();

        $pais = new Pais;
        $pais -> nombre = "Mexico";
        $pais ->save();

        $pais = new Pais;
        $pais -> nombre = "El salvador";
        $pais ->save();

        $pais = new Pais;
        $pais -> nombre = "Bolivia";
        $pais ->save();

        $pais = new Pais;
        $pais -> nombre = "Uruguay";
        $pais ->save();
       
       

        $clan = new Clan;
        $clan -> titulo = "Clan los Invencibles Recluta!";
        $clan -> user_id = 2;
        $clan -> descripcion = "Somos un clan especializado en jugadas sucias.";
        $clan -> requisitos = "Tener experiencia con todos los operadores de R6S";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;        
        $clan -> discord ="https://discord.com/invite/twKsA8p";
        $clan -> whatsapp = "https://chat.whatsapp.com/Em3pVRhcGSNLgr0FbHFa9D";
        $clan -> published_at = Carbon::now()->subDays(9);
        $clan -> save();

        $clan = new Clan;
        $clan -> titulo = "Se bucan Noobs";
        $clan -> user_id = 2;
        $clan -> descripcion = "Clan nuevo en busca de gente que quiera divertirse";
        $clan -> requisitos = "Ser respetuoso";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;
        $clan -> discord ="https://discord.com/invite/twKsA8p";
        $clan -> whatsapp = "https://chat.whatsapp.com/Em3pVRhcGSNLgr0FbHFa9D";
        $clan -> published_at = Carbon::now()->subDays(4);
        $clan -> save();

        $clan = new Clan;
        $clan -> titulo = "La guerra del rey";
        $clan -> user_id = 1;
        $clan -> descripcion = "SSJ Gohan y compañía le dan la bienvenida a The King War. Somos un clan relajado y relajado.";
        $clan -> requisitos = "Ayuntamiento: 9+ Héroes: Intermedio Trofeos: +600 Idioma: Inglés";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;
        $clan -> discord ="https://discord.com/invite/twKsA8p";
        $clan -> whatsapp = "https://chat.whatsapp.com/Em3pVRhcGSNLgr0FbHFa9D";
        $clan -> published_at = Carbon::now()->subDays(3);
        $clan -> save();

        $clan = new Clan;
        $clan -> titulo = "Hijos de Cain busca jugadores experimentados";
        $clan -> user_id = 1;
        $clan -> descripcion = "Somos un clan que busca gente con experiencia";
        $clan -> requisitos = "Tener jugando por lo menos 3 años alguno de los juegos";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;
        $clan -> discord ="https://discord.com/invite/twKsA8p";
        $clan -> whatsapp = "https://chat.whatsapp.com/Em3pVRhcGSNLgr0FbHFa9D";
        $clan -> published_at = Carbon::now()->subDays(2);
        $clan -> save();


        
        $clan = new Clan;
        $clan -> titulo = "Clan Secret busca formar division de jugadores argentinos!";
        $clan -> user_id = 1;
        $clan -> descripcion = "Se solicitan jugadores de elite que quiera probar sus habilidades";
        $clan -> requisitos = "Tener habilidad y disciplina";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;        
        $clan -> discord ="https://discord.com/invite/twKsA8p";
        $clan -> whatsapp = "https://chat.whatsapp.com/Em3pVRhcGSNLgr0FbHFa9D";
        $clan -> published_at = Carbon::now()->subDays(12);
        $clan -> save();

        $clan = new Clan;
        $clan -> titulo = "Nuevo Clan los Polimorfos";
        $clan -> user_id = 2;
        $clan -> descripcion = "Clan nuevo busca jugadores de Starcraft 2 para partidas Igualadas";
        $clan -> requisitos = "Tener jugando por lo menos 3 años";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;
        $clan -> discord ="https://discord.com/invite/twKsA8p";
        $clan -> whatsapp = "https://chat.whatsapp.com/Em3pVRhcGSNLgr0FbHFa9D";
        $clan -> published_at = Carbon::now()->subDays(4);
        $clan -> save();

        $clan = new Clan;
        $clan -> titulo = "Gir Sommath";
        $clan -> user_id = 1;
        $clan -> descripcion = "SSJ Gohan y compañía le dan la bienvenida a The King War. Somos un clan relajado y relajado.";
        $clan -> requisitos = "Ayuntamiento: 9+ Héroes: Intermedio Trofeos: +600 Idioma: Inglés";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;
        $clan -> discord ="https://discord.com/invite/twKsA8p";
        $clan -> whatsapp = "https://chat.whatsapp.com/Em3pVRhcGSNLgr0FbHFa9D";
        $clan -> published_at = Carbon::now()->subDays(3);
        $clan -> save();

        $clan = new Clan;
        $clan -> titulo = "Hijos del perro busca jugadores experimentados";
        $clan -> user_id = 1;
        $clan -> descripcion = "Somos un clan que busca gente con experiencia";
        $clan -> requisitos = "Tener jugando por lo menos 3 años alguno de los juegos";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;
        $clan -> discord ="https://discord.com/invite/twKsA8p";
        $clan -> whatsapp = "https://chat.whatsapp.com/Em3pVRhcGSNLgr0FbHFa9D";
        $clan -> published_at = Carbon::now()->subDays(2);
        $clan -> save();

        $clan = new Clan;
        $clan -> titulo = "Gatos Crew Recluta";
        $clan -> user_id = 1;
        $clan -> descripcion = "Buscamos jugadores interseados en unirse";
        $clan -> requisitos = "Tener jugando por lo menos 3 años alguno de los juegos";
        $clan -> edadminima = 15;
        $clan -> edadmaxima = 18;
        $clan -> discord ="https://discord.com/invite/twKsA8p";
        $clan -> whatsapp = "https://chat.whatsapp.com/Em3pVRhcGSNLgr0FbHFa9D";
        $clan -> published_at = Carbon::now()->subDays(2);
        $clan -> save();



        




    }
}
