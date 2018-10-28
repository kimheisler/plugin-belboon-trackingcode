<?php

namespace BelboonTrackingCode\Providers;

use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;

class BelboonTrackingCodeHomepageProvider
{
    public function call( Twig $twig, ConfigRepository $configRepository )
    {
        return $twig->render('BelboonTrackingCode::BelboonTrackingCodeHomepageProvider', [
            'belboonProgramId' => $configRepository->get('BelboonTrackingCode.belboonProgramId')
        ]);
    }
}