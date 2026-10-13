<?php
    function e($value) {
        return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
    }

    $images = [
        'thumb16.webp' => 'Relaxing by the Window',
        'thumb17.webp' => 'A Day Among the Flowers',
        'thumb18.webp' => 'A Vintage Record Shop',
        'thumb19.webp' => 'Into the Mist',
        'thumb20.webp' => 'A Robot in the Desert',
        'thumb21.webp' => 'Sunlit Freedom',
        'thumb22.webp' => 'Portrait in Orange',
        'thumb23.webp' => 'Autumn Forest in the Fog',
    ];

    $imageDescription = [
        'thumb16.webp' => 'A person sits back in a dark wooden chair beside a tall, sunlit window. Their legs are comfortably stretched out, catching the soft daylight that filters through sheer white curtains. The quiet room and relaxed pose create a calm, unhurried moment.',
        'thumb17.webp' => 'Wearing round sunglasses and a mustard-yellow outfit, a woman gazes upward beneath a bright blue sky. Golden flowers drift and tumble around her, their warm color echoing her clothes. The dreamy scene feels lively, playful, and full of sunshine.',
        'thumb18.webp' => 'In a cozy room lined with warm wooden boards, a woman in retro-inspired clothes proudly holds a vinyl record. A record player and vintage details fill the space around her, giving the scene the feel of a welcoming old-fashioned music shop. Her colorful outfit adds to its nostalgic charm.',
        'thumb19.webp' => 'A lone figure in a vivid red jacket walks along a path where the landscape disappears into thick, pale mist. One arm reaches upward, making a bold gesture against the soft, quiet surroundings. Trees and open ground fade into the fog, lending the scene a sense of mystery and possibility.',
        'thumb20.webp' => 'A weathered retro robot stands by itself on a broad, sandy plain scattered with rocks. Its scuffed metal body and boxy head suggest an old-fashioned machine, while the distant hills blur into the muted sky. The still, empty landscape gives the robot a solitary, adventurous presence.',
        'thumb21.webp' => 'A woman in a light dress stretches both arms wide in a field filled with warm, hazy sunlight. Her face turns toward the glow as the soft colors of the scene blend into a dreamy backdrop. The open pose gives the image a feeling of freedom, ease, and joy.',
        'thumb22.webp' => 'A woman in a vivid orange top looks directly toward the camera against a bold red-orange background. Dramatic light and deep shadows bring out the rich colors and give the portrait a striking, confident mood. The simple backdrop keeps attention on her expression and pose.',
        'thumb23.webp' => 'Tall autumn trees glow in shades of orange and red as dense fog rolls through the forest. Dark evergreen shapes and a moody sky frame the brighter foliage, creating layers of color and depth. The mist softens the distant trees and gives the landscape a quiet, atmospheric feel.'
    ];
?>