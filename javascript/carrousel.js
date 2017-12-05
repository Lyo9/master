function defileGauche(slide){
    var elem = document.getElementById("carrousel"); 

    var pos_debut = 0; 
    var pos_fin = -25; 
    var duration = 1000;

    //On teste le slide envoyé
    switch(slide)
    {
        case 0:
            pos_debut = -0; 
            pos_fin = -75; 
            duration = 400;
        break; 
        case 1:
            pos_debut = -25; 
            pos_fin = -0; 
        break;
        case 2:
            pos_debut = -50; 
            pos_fin = -25; 
        break;
        case 3:
            pos_debut = -75; 
            pos_fin = -50; 
        break;
    }
    var spriteFrames = [
    { transform: 'translateX('+pos_debut+'%)' },
    { transform: 'translateX('+pos_fin+'%)' }   
    ];
    
    elem.animate(spriteFrames,  {
    easing: 'ease-in-out',
    duration: duration,
    fill: "forwards"
    });
}

function defileDroite(slide){
    var elem = document.getElementById("carrousel"); 

    var pos_debut = 0; 
    var pos_fin = -25; 
    var duration = 1000; 

    //On teste le slide envoyé
    switch(slide)
    {
        case 0:
            pos_debut = 0; 
            pos_fin = -25; 
        break; 
        case 1:
            pos_debut = -25; 
            pos_fin = -50; 
        break;
        case 2:
            pos_debut = -50; 
            pos_fin = -75; 
        break;
        case 3:
            pos_debut = -75; 
            pos_fin = -0; 
            duration = 400; 
        break;

    }
    var spriteFrames = [
    { transform: 'translateX('+pos_debut+'%)' },
    { transform: 'translateX('+pos_fin+'%)' }   
    ];

    elem.animate(spriteFrames,  {
    easing: 'ease-in-out',
    duration: duration,
    fill: "forwards"
    });
}
