<?php

namespace App;

class UserData
{
    public function fetchAll()
    {
        return [
            [
                'title'   => 'Legitimate post from a friendly user',
                'url'     => 'http://example.org',
                'content' => 'Nulla molestie, nulla eget feugiat porttitor, metus diam venenatis lacus, non interdum 
                    dolor libero vel erat. Nullam dolor risus, fermentum vitae mattis finibus, suscipit sed justo. 
                    Quisque ac elit in nisi consectetur lobortis eu nec dui. Donec et aliquam elit. Curabitur arcu 
                    magna, egestas quis mauris a, sollicitudin posuere felis. Nam lectus arcu, interdum vitae varius 
                    in, viverra at odio. Etiam vestibulum ipsum ac mauris rutrum condimentum. Nulla facilisi. Nunc 
                    suscipit ipsum id lacus fermentum imperdiet.'
            ],
            [
                'title'   => 'XSS via event handler attribute',
                'url'     => '#" onclick="alert(\'The security aspect of cyber is very, very tough.\');" ',
                'content' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
                    Vestibulum lobortis finibus mauris, vel accumsan lacus ullamcorper ut. Mauris non ante a elit 
                    ullamcorper tempus. Aliquam ornare ullamcorper velit ac maximus. Fusce ex sem, semper ac molestie 
                    dictum, tempus id erat. Fusce justo quam, volutpat a bibendum quis, lacinia et justo. Proin eget 
                    tincidunt sem. Aenean cursus massa ante, commodo finibus metus aliquet eget. Suspendisse in urna 
                    mauris.'
            ],
            [
                'title'   => 'XSS via inline script block',
                'url'     => 'http://example.org',
                'content' => '<script type="text/javascript" src="http://www.cornify.com/js/cornify.js"></script>
                    <script type="text/javascript">
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                        cornify_add();
                    </script>'
            ],
        ];
    }
}
