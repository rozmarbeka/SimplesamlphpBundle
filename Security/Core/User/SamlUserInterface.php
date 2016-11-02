<?php

namespace Rozmarbeka\SimplesamlphpBundle\Security\Core\User;

interface SamlUserInterface
{
    public function setSamlAttributes(array $attributes);
}
