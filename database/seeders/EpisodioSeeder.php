<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Episodio;

class EpisodioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Episodio::create([ // naruto
            'id_anime' => 1,
            'n_episodio' => 1,
            'temporada' => 1,
            'link' => 'https://rr3---sn-oxunxg8pjvn-jbiz6.googlevideo.com/videoplayback?expire=1728086315&ei=qxAAZ6-5K8a_0_wPkMm7oAw&ip=2804:14d:78b6:8189:eeef:9dae:36f6:2cc5&id=59f5fe9e5a1601b4&itag=18&source=blogger&xpc=Egho7Zf3LnoBAQ%3D%3D&mh=-G&mm=31&mn=sn-oxunxg8pjvn-jbiz6&ms=au&mv=m&mvi=3&pl=44&susc=bl&eaua=XAJS3AGfXZI&mime=video/mp4&vprv=1&rqh=1&dur=1416.254&lmt=1586785134538094&mt=1728057175&sparams=expire,ei,ip,id,itag,source,xpc,susc,eaua,mime,vprv,rqh,dur,lmt&sig=AJfQdSswRQIgDzkNTmgduMb5mzxmF8N6mmhr72ijl-W7H36COnL_aFwCIQCsp-1FD7M3zJsMDyKKeh9qH5Hjjvc7V-kDkjsf4dXyLQ%3D%3D&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=ACJ0pHgwRAIgESUDOIPgHesYOfQtvGJDYa3rSBJxWzTPfFVjyZGkoRwCICJjr-9NyUBNOStSFM8L4FOYeTJBZ4E98d1_GTX90Aq-&cpn=BJa6ECH0YPBRPWEh&c=WEB_EMBEDDED_PLAYER&cver=1.20241001.01.00'
        ]);

        Episodio::create([ // attack on titan
            'id_anime' => 2,
            'n_episodio' => 1,
            'temporada' => 1,
            'link' => 'https://rr6---sn-oxunxg8pjvn-jbiz6.googlevideo.com/videoplayback?expire=1728086389&ei=9RAAZ6G9HYuEy_sPoL2w-Qc&ip=2804:14d:78b6:8189:eeef:9dae:36f6:2cc5&id=ac0c3f3506eac84f&itag=18&source=blogger&xpc=Egho7Zf3LnoBAQ%3D%3D&mh=Dz&mm=31&mn=sn-oxunxg8pjvn-jbiz6&ms=au&mv=m&mvi=6&pcm2cms=yes&pl=44&susc=bl&eaua=XAJS3AGfXZI&mime=video/mp4&vprv=1&rqh=1&dur=1542.315&lmt=1605819863293557&mt=1728057175&txp=1319224&sparams=expire,ei,ip,id,itag,source,xpc,susc,eaua,mime,vprv,rqh,dur,lmt&sig=AJfQdSswRQIgaq7zSAx1DaaIL-CM-q_8Tj17eU22vHFp40GU2z9jH50CIQCmqxlXOWocKZBjBBhSJ3M9TNGJ9ExI5_9lRjTsVa8_6A%3D%3D&lsparams=mh,mm,mn,ms,mv,mvi,pcm2cms,pl&lsig=ACJ0pHgwRAIgCwMC4o4BynB_nSOtMgJ29jGD7hQU8_Kj9JNAZvQKX1MCICA5SeWrEToP9L0KvzC2FcBc3n4u-egry3wkaYl4duzk&cpn=Sunkg-mxzRBj6RQO&c=WEB_EMBEDDED_PLAYER&cver=1.20241001.01.00'
        ]);

        Episodio::create([ // kaguya-sama
            'id_anime' => 3,
            'n_episodio' => 1,
            'temporada' => 1,
            'link' => 'https://rr3---sn-oxunxg8pjvn-jbiz6.googlevideo.com/videoplayback?expire=1728086421&ei=FREAZ4i-GoCG0_wPydu8kQU&ip=2804:14d:78b6:8189:eeef:9dae:36f6:2cc5&id=8723aeb264053572&itag=18&source=blogger&xpc=Egho7Zf3LnoBAQ%3D%3D&mh=R7&mm=31&mn=sn-oxunxg8pjvn-jbiz6&ms=au&mv=m&mvi=3&pl=44&susc=bl&eaua=XAJS3AGfXZI&mime=video/mp4&vprv=1&rqh=1&dur=1500.218&lmt=1547314892496025&mt=1728057175&sparams=expire,ei,ip,id,itag,source,xpc,susc,eaua,mime,vprv,rqh,dur,lmt&sig=AJfQdSswRQIhALm1OGZQ-a2KSCWfl71ftOWz_1KeZ0FQ-BkZLKTH5bAoAiAEGj7CQ_-KpaQDsz2kogxqqJWESzvd3SoccwZNbjLQfQ%3D%3D&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=ACJ0pHgwRQIhAJ3UQpjnN4yVTiXi3q1gEHNvtLdxpy4rRyBiijQVEjxcAiAWYYXFjnOG3v9NBpzaqs895ETo4-lywqyv5lG1KvvQBw%3D%3D&cpn=Pl1f4Z01i1O5iOLs&c=WEB_EMBEDDED_PLAYER&cver=1.20241001.01.00'
        ]);

        Episodio::create([ // kaguya-sama ep 2
            'id_anime' => 3,
            'n_episodio' => 2,
            'temporada' => 1,
            'link' => 'https://rr2---sn-oxunxg8pjvn-jbiz6.googlevideo.com/videoplayback?expire=1728086445&ei=LREAZ4jlHLKsy_sPgYKw6AI&ip=2804:14d:78b6:8189:eeef:9dae:36f6:2cc5&id=ce16c6997c3c7dee&itag=18&source=blogger&xpc=Egho7Zf3LnoBAQ%3D%3D&mh=qA&mm=31&mn=sn-oxunxg8pjvn-jbiz6&ms=au&mv=m&mvi=2&pl=44&susc=bl&eaua=XAJS3AGfXZI&mime=video/mp4&vprv=1&rqh=1&dur=1440.217&lmt=1699874658802835&mt=1728057175&txp=0011224&sparams=expire,ei,ip,id,itag,source,xpc,susc,eaua,mime,vprv,rqh,dur,lmt&sig=AJfQdSswRQIgULIHz_Ibz84BEuAvshBWpM1EdllDVoGDL2F-YJei0AMCIQDRFTqKfcmX4IlQhUcUHDO0YeZG-2qs_Z-5lbRD4lCe8A%3D%3D&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=ACJ0pHgwRQIhAKK_OwVgSGDJj1dFlH5umgf335OXZ58qwRKH4qhqT9hzAiB99MGsPlvvR8mw7AoC_6rKqPTUGvs4iYA_wH5JDYmxaA%3D%3D&cpn=V0yzReSmd2YPbyA6&c=WEB_EMBEDDED_PLAYER&cver=1.20241001.01.00'
        ]);

        Episodio::create([ // overlord
            'id_anime' => 4,
            'n_episodio' => 1,
            'temporada' => 1,
            'link' => 'https://rr1---sn-oxunxg8pjvn-jbiz6.googlevideo.com/videoplayback?expire=1728085934&ei=Lg8AZ5-XCNzFy_sP7J3H6QE&ip=2804:14d:78b6:8189:eeef:9dae:36f6:2cc5&id=a58bef02c1b23d81&itag=18&source=blogger&xpc=Egho7Zf3LnoBAQ%3D%3D&mh=DK&mm=31&mn=sn-oxunxg8pjvn-jbiz6&ms=au&mv=m&mvi=1&pl=44&susc=bl&eaua=XAJS3AGfXZI&mime=video/mp4&vprv=1&rqh=1&dur=1453.336&lmt=1708551563653584&mt=1728056941&txp=1311224&sparams=expire,ei,ip,id,itag,source,xpc,susc,eaua,mime,vprv,rqh,dur,lmt&sig=AJfQdSswRQIhAPMM4qEcaFIRqZj7CNfmV20zZp98JgQnGQqg_3z_ZkC4AiAZ6ALtf_PWMfNFzHXnYElbs5HoMXtfeAc7_aBqq9nkag%3D%3D&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=ACJ0pHgwRgIhAMzVdYudzzUL4-59uaFCiVzM6e42GhzC9OxPCGVX0-UZAiEA83oOJByVkMKqHNqG3AXsJiDJxepC7xgnDbSnhSk8HPE%3D&cpn=EIo1CkxhoiwDuOZu&c=WEB_EMBEDDED_PLAYER&cver=1.20241001.01.00'
        ]);
    }
}
