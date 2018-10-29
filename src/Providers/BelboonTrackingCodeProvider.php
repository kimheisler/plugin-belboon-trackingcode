<?php

namespace BelboonTrackingCode\Providers;

use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\Templates\Twig;

class BelboonTrackingCodeProvider
{
    public function call( Twig $twig, ConfigRepository $configRepository )
    {
        return $twig->render('BelboonTrackingCode::BelboonTrackingCodeProvider', [
            'belboonProgramId' => $configRepository->get('BelboonTrackingCode.belboonProgramId')
        ]);
    }
}