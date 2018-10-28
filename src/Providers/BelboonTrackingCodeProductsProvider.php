<?php

namespace BelboonTrackingCode\Providers;

use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;

class BelboonTrackingCodeProductsProvider
{
    public function call( Twig $twig, ConfigRepository $configRepository )
    {
        return $twig->render('BelboonTrackingCode::BelboonTrackingCodeProductsProvider', [
            'belboonProgramId' => $configRepository->get('BelboonTrackingCode.belboonProgramId')
        ]);
    }
}