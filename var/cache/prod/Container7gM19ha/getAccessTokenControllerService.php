<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDn0kvo0Y5hgA7A'."\n".'//JkJwSaxvPIId6Z8ZtIlpcjBDlxyFXVcrmeD9jZE4ErQZq8pCy1/9TY+0WdWprp'."\n".'MJ0Q67YVvZ0tqFASz4caY/EgiVTaExlrXBKUOyqaVE21MjaBpQxE7iudK4XP3fYc'."\n".'1OfeI3T8VUZxMKnI53spjivBdCe35j+z7bLSCwtdgMND/A5E3tEibC/ZDDftKstF'."\n".'fNMqA5gedo7qOlcn78VGZyKRQrWanK6l9wPxp3/dRhGLSXdkOZq07EjDGWMfpIxf'."\n".'Oam1a4w/H6q8aIAd3XaEXBECAYW7fdtEIgUXIU2k/gyZBF6ZW47Yn6SHojhVCp/L'."\n".'WeU6E9w1AgMBAAECggEBAID0UpWoPHOwMITb25Iqwjz2/xUNAi7QX3j5jAlGiE3r'."\n".'CxQ5RVfPqOjYGLpfPBxDlzuGnHg3DnqBtDqTeEu5Uwi0+YI0ZpaQKq9beP6IZlMI'."\n".'3NMD3LHoV8KRsshgrkFf9ntBobFETKNc7VMMfA7t2l2jchP05f2EBtcO5vguDQoW'."\n".'U8HLtuR3KfqzlpmANJX4LEiQID0tb9kIazn6HFiSfIY5i0IRqhfttLd13Ii1Cwqh'."\n".'3oNmyY/pMSBx80yyetravfpMtqXx5ftWa94XJMDHtO46rAHJvrPkTpkft/F9CaNA'."\n".'hutYTPrCCx3bZf3y+VmnMbMk55seNjd97tirGzg2GgECgYEA9A52051v6J6G1iG7'."\n".'4lY2BltjFTsZgWM9XUI3H2cUy8wj5rrlA1hEw1EiVcnzJBhuN60NoWVyTQVfTAT3'."\n".'MI8h9QOcNStqFrXDhxhRek9MQMadjd9laKWqO7xhloNSXBqWfowDXvhOualyqI+9'."\n".'RZ250fFkNbOIEeMXuBtwGScuQWUCgYEA8yqNVoZbjc6N8cLB9GK+krUVg3Z4xeLM'."\n".'T7dlOryXzMQYcmXYzypW7wvVfA/TG/zk+g2aluoBK89I4xVdSmPpdrFoAFx4VFqf'."\n".'v4d9X0M0bv1CDg6wSGqj52A7Ey0iz0sbFhPAGafYjDsXaezmwigQcJkZbSSem13A'."\n".'hpEAhYxJapECgYEAnStXcM4ZzIeStAHDem4kmpFtzLVjpoSfdxh2YT3EEb6kfClt'."\n".'5GqK1fHBF9hXQa6OBELo3UB0jI9iIJWuDtKOfrhVd5Q+3OMvSSfrCMZah/igbEYq'."\n".'i2rsp02Y1xI5DuF8e4B1h0qHgF9UXKM8s8FwcnhvHXpBras+kizxUvF9g1UCgYBq'."\n".'+i10A2gD2vtXgPcTLN3qbQAp9dTsOfrolyZR0OZ3j02yBlx7x4S3Zd1l1xBpH7kc'."\n".'yR9ZhVk+jNLkFGIWeB4dua6negb2FWhyOolNf6NxsLl+tbeYJFI3WH6k0RafW8tu'."\n".'ywGYR99c0iJa134trLKO1sv42ENu1q/8g45XMoCaAQKBgQC80fIZ4qd9oiWJYzSm'."\n".'ApfWn8vcWRAUoTZalkEmqRuQXyZtIqzwGdNRWM+rbrI7LAxnVzbziCHO35Z9CGOd'."\n".'2P+/h1ddWe2GNjjGlyMApwGceJtk2AB+jdgH395W+IKxYLeCNNfLyvrIOesvRfcL'."\n".'ymTlg5rvrVgHmIELIqT4aFfvBw=='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000042924902e87585204006f8767d22030a08b4edd49d05577ccaefbaef25dfe9dadb9184dbe60b64254d5cf1b94a206917fd82acb3f8be975d5226a47937f2104');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);