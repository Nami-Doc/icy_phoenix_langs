<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_ICYPHOENIX'))
{
  exit;
}

if (empty($lang) || !is_array($lang))
{
 $lang = array();
}

$lang = array_merge($lang, array(
 
  'COOKIE_POLICY' => "
  <h2>R&egrave;gles d\'utilisation des cookies<h2><br />

  <p>Comme la plupart des sites web, celui-ci utilise les cookies.<br />

  <p>Les cookies sont des simples fichiers textes stock&eacute;s sur votre appareil (ordinateur, appareil mobile, etc). Ils servent &agrave; plusieurs choses, par exemple &agrave; se souvenir de vous lors de chaque visite afin de vous reconnecter automatiquement, pour certaines options de configuration, ou pour des statistiques.

  <p>Il est important de noter que les cookies <b>ne contiennent pas d'informations personnelles</b>. Pas votre nom, pas votre e-mail, etc.

  <p>En navigant sur ce site web, vous acceptez l'utilisation des cookies, ainsi que des futures mises &agrave; jour de cette charte.

  <p>Vous pouvez choisir de d&eacute;sactiver les cookies, nous ne pouvons cependant garantir une navigation aussi comfortable.

  <p>Les informations que les cookies contiennent ne permettent pas de vous identifier personnellement, mais elles peuvent contenir votre syst&egrave;me d'exploitation, navigateur, date de visite, votre connexion &agrave; internet.

  <p>Les articles suivants d&eacute;crivent les options que vous avez pour d&eacute;sactiver les Cookies. Attention, cela sera effectif sur tous les sites, pas uniquement celui-ci.</p>

  <ul>
     <li><p><strong>Internet Explorer: </strong> <a href='http://support.microsoft.com/kb/278835'>http://support.microsoft.com/kb/278835</a></p></li>
     <li><p><strong>Chrome: </strong> <a href='http://support.google.com/chrome/bin/answer.py?hl=en-GB&amp;answer=95647'>http://support.google.com/chrome/bin/answer.py?hl=en-GB&amp;answer=95647</a></p></li>
     <li><p><strong>Safari: </strong> <a href='http://docs.info.apple.com/article.html?path=Safari/5.0/en/9277.html'>http://docs.info.apple.com/article.html?path=Safari/5.0/en/9277.html</a> (or <a href='http://support.apple.com/kb/HT1677'>http://support.apple.com/kb/HT1677</a> for mobile versions)</p></li>
     <li><p><strong>Firefox: </strong> <a href='http://support.mozilla.org/en-US/kb/Enabling%20and%20disabling%20cookies'>http://support.mozilla.org/en-US/kb/ Enabling%20and%20disabling%20cookies</a></p></li>
     <li><p><strong>Blackberries: </strong> <a href='http://docs.blackberry.com/en/smartphone_users/deliverables/32004/Turn_off_cookies_in_the_browser_60_1072866_11.jsp'>http://docs.blackberry.com/en/smartphone_users/deliverables/ 32004/Turn_off_cookies_in_the_browser_60_1072866_11.jsp</a></p></li>
     <li><p><strong>Android: </strong> <a href='http://support.google.com/mobile/bin/answer.py?hl=en&amp;answer=169022'>http://support.google.com/mobile/bin/answer.py?hl=en&amp;answer=169022</a></p></li>
     <li><p><strong>Opera: </strong> <a href='http://www.opera.com/browser/tutorials/security/privacy/'>http://www.opera.com/browser/tutorials/security/privacy/</a></p></li>
   </ul>

  <br /><br /><br />

  <p><b>Cookies Tiers</b><br />

  <p>Si activ&eacute;, le site peut s'interfacer avec Facebook, Twitter, Google et Youtube. Ceux-ci peuvent amener leurs propres cookies. Voici leurs chartes :

  <ul>
     <li><p><strong>Facebook</strong> data use policy: <a href='http://www.facebook.com/about/privacy/your-info-on-other'>http://www.facebook.com/about/privacy/your-info-on-other</a></p></li>
     <li><p><strong>Twitter</strong> privacy policy: <a href='https://twitter.com/privacy'>https://twitter.com/privacy</a></p></li>
     <li><p><strong>Google And YouTube</strong> cookie policy: <a href='http://www.google.com/intl/en/policies/privacy/faq/#toc-cookies'>http://www.google.com/intl/en/policies/privacy/faq/#toc-cookies</a> (Google standard terms).</p></li>
   </ul>
",

  'PRIVACY_POLICY' => "<h2>R&egrave;gles de confidentialit&eacute;</h2>

  <p>En naviguant sur ce site, vous acceptez les r&egrave;gles de confidentialit&eacute;, ainsi qu'aux changements futurs qui y seront effectu&eacute;s.

  <p>Nous nous engageons &agrave; prot&eacute;ger toute information personnelle que vous nous fournissez. Toute utilisation de telles informations sera clairement explicit&eacute;e.

  <p>Nous stockons des informations &agrave; propos de vous si vous remplissez un formulaire sur le site. Les informations relev&eacute;es peuvent &ecirc;tre, par exemple, votre adresse e-mail et genre (&agrave; l'inscription), pr&eacute;f&eacute;rences (dans votre profil), et autres d&eacute;tails.

  <p>Nous faisons de notre mieux pour prot&eacute;ger vos donn&eacute;es, et nous avons de nombreuses s&eacute;curit&eacute;s en place pour garantir cette protection. N&eacute;anmoins, compte tenu de la nature d'Internet, il n'est pas possible de promettre que vous donn&eacute;es seront prot&eacute;g&eacute;es &agrave; jamais.

  <p>Si vous d&eacute;cidez de vous-m&ecirc;me de poster vos informations sur le chat, sur les forums, etc ; nous ne pourrons &ecirc;tre tenus responsables de l'utilisation qui en sera faite par les autres utilisateurs du site.

  <p>Si vous d&eacute;sirez supprimer des informations que vous avez par avant mis &agrave; la vue de tous, ou que vous d&eacute;sirez savoir quels informations dispose le site, utilisez le formulaire de contact.

  <p>Nous nous engageons &agrave; ne pas utiliser vos informations &agrave; de fins commerciales, ni &agrave; les revendre / donner &agrave; de tierces parties, sans votre accord explicite.

 <p>Il est possible que les informations d&eacute;crites ici soient transf&eacute;r&eacute;es, vendues ou r&eacute;assign&eacute;es, dans le cas d'une vente, d'une fusion, d'un changement de propri&eacute;taire, ou d'une r&eacute;organisation.
  ",
));
