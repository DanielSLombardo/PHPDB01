<?php
/**
 * Arquivo que faz a configuração incial da página.
 * Por exemplo, conecta-se ao banco de dados.
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

/**
 * Variável que define o título desta página
 *     Referências:
 *     → https://www.w3schools.com/php/php_variables.asp
 *     → https://www.php.net/manual/pt_BR/language.variables.basics.php
 */
$title = "Quem tem fome tem pressa...";

/**
 * Inclui o cabeçalho da página 
 *     Referências:
 *     → https://www.w3schools.com/php/php_includes.asp
 *     → https://www.php.net/manual/pt_BR/function.include.php
 */
require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');
?>
            <section>
                <h2>Título</h2>
                <p>Quisque vulputate aliquet lectus, quis consectetur leo posuere id. Aliquam finibus justo ac pellentesque vehicula. 
                    Vestibulum nec lacus purus. Maecenas cursus, sem eget sollicitudin auctor, lorem orci laoreet purus, 
                    a fermentum massa dolor vel nulla. Suspendisse ac pharetra sem, et suscipit dolor. Phasellus quis lacinia felis. 
                    Fusce pharetra blandit magna, et auctor tellus pellentesque nec. Nulla consequat neque magna, 
                    quis mattis tellus hendrerit tempor. Quisque posuere elit velit, quis fermentum nulla scelerisque ut. 
                    Donec ut egestas tellus. Maecenas urna sem, scelerisque sit amet quam ac, molestie dignissim leo. 
                    Cras euismod magna metus, in ultrices arcu rhoncus nec. Quisque porta velit sit amet dui varius, 
                    at volutpat eros interdum. Praesent quis magna viverra, molestie lectus ac, porta lectus.</p>
                <p>Quisque vulputate aliquet lectus, quis consectetur leo posuere id. Aliquam finibus justo ac pellentesque vehicula. 
                    Vestibulum nec lacus purus. Maecenas cursus, sem eget sollicitudin auctor, lorem orci laoreet purus, 
                    a fermentum massa dolor vel nulla. Suspendisse ac pharetra sem, et suscipit dolor. Phasellus quis lacinia felis. 
                    Fusce pharetra blandit magna, et auctor tellus pellentesque nec. Nulla consequat neque magna, 
                    quis mattis tellus hendrerit tempor. Quisque posuere elit velit, quis fermentum nulla scelerisque ut. 
                    Donec ut egestas tellus. Maecenas urna sem, scelerisque sit amet quam ac, molestie dignissim leo. 
                    Cras euismod magna metus, in ultrices arcu rhoncus nec. Quisque porta velit sit amet dui varius, 
                    at volutpat eros interdum. Praesent quis magna viverra, molestie lectus ac, porta lectus.</p>
            </section>

            <aside>
                <h3>Lateral</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, aperiam corporis culpa consequatur
                    iusto.</p>
            </aside>
<?php
// Inclui o rodapé
require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');
?>
