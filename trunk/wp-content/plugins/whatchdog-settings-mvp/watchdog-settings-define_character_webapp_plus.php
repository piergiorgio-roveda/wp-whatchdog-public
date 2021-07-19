<?php
function watchdog_character_webapp_plus($arr){

  $i=0;
  $lang='ITA';

/*
  $mygroup='lblGeneral';
  $arr[]=watchdog_language_webapp_default(array(
    'codice' => 'lblCluster',//require for group!
    'lang' => $lang,
    'etichetta' => 'Cluster',
    'mygroup' => $mygroup,
  ));

  $arr[]=watchdog_language_webapp_default(array(
    'codice' => 'lblIndex',//require for group!
    'lang' => $lang,
    'etichetta' => 'Indici',
    'mygroup' => $mygroup,
  ));
  */

  $arr['CorporateWorldProblem']=array(
      "You've been extracted by a rival corporation, and now you have to update all the licensing for your cybernetics.",
      "Criminal deckers have broken into the corporate network, and now your terminal keeps opening connections to random military networks.",
      "Your division has a new manager, and your matrix avatar has been reset to its default appearance.",
      "Your section has a new manager, and now you have to change your performance-enhancing drug addiction.",
      "Someone has hacked your robot geisha, and now it keeps going into sleep mode.",
      "You've been moved into a new office, and your cybernetic hand keeps setting off the new weapons scanner.",
      "Enemy hackers sabotaged your research laboratory overnight, and the fire suppression system has ruined your Italian leather chair.",
      "You've been stuck conducting an audit all morning, and now your office thinks that you're out and gone into self-cleaning mode.",
      "You've been stuck in media interviews all morning, and now the cafe is out of lobster bisque for lunch.",
      "Criminal deckers have broken into the corporate network, and now you keep hearing a beeping sound from above the ceiling.",
      "Someone has hacked your robot geisha, and now it's flirting with your PDA.",
      "You've been extracted by a rival corporation, and your face doesn't match the new corporate style guide.",
      "You've been extracted by a rival corporation, and now you have to wait until tomorrow to be assigned a jetcopter.",
      "You lost a wager with a peer, and have to crash one of your sportscars and video it.",
      "You've been stuck courting a foreign partner all morning, and now the only robot geisha available for lunch is Koisu-8, which still hasn't had its hand razors replaced.",
      "You've been stuck in media interviews all morning, and now your PDA battery is actually dead.",
      "The corporation has issued a new style guide, but none of the approved eyes match your hair color.",
      "You've been extracted by a rival corporation, and your face doesn't match the new corporate style guide.",
      "You've been stuck conducting an audit all morning, and now the assassin you were going to hire has gotten bored and left.",
      "Criminal agents broke into your office overnight, and now you need a new assistant to replace the one who was killed.",
      "Someone has hacked your robot geisha, and now it keeps pointing at people and whispering \"Bang!\".",
      "The corporation has a new CTO, and your matrix avatar has been reset to its default appearance.",
      "Criminal deckers have broken into the corporate network, and now everyone has to change their biometrics.",
      "You lost a wager with a peer, and have to get addicted to something for a week.",
      "You've been stuck in media interviews all morning, and now you don't have enough time to make it to Yokohama for lunch.",
      "The corporation has merged with another, and now all the vending machines produce the same flavor of soycaff.",
      "A large strike team of mercenary agents tried to break into\n      your facility overnight, and the sentry turrets\n      burned through your entire year-end bonus in ammunition.",
      "Mercenary agents broke into your building overnight, and the new security guards this morning aren't as attractive.",
      "The corporation has merged with another, and your SMG doesn't match the new corporate dress code.",
      "The corporation has a new CTO, and now the corporate AI speaks only German.",
      "Mercenary hackers have broken into the corporate private matrix, and now all the vending machines produce the same flavor of coffee.",
      "Mercenary agents broke into your office overnight, and now there's blood all over your endangered hardwood desk.",
      "Someone has hacked your cyberdoll, and now it keeps pointing at people and whispering \"Bang!\".",
      "Someone has hacked your cyberdoll, and now it won't stop talking about what Chloe Slayton in Acquisitions has been up to.",
      "Someone has hacked your robot geisha, and now it keeps pointing at people and whispering \"Bang!\".",
      "Criminal deckers have broken into the corporate private matrix, and now your PDA won't connect to the office wireless network.",
      "A strike team of criminal agents sabotaged your development facility overnight, and now nobody will deliver lunch because of the radiation alarms.",
      "Criminal deckers sabotaged your development facility overnight, and now your bioprinters won't fabricate\n      anything except middle fingers.",
      "Your division is under new management, and now everyone's social networks are up for review.",
      "Someone has hacked your robot geisha, and now it's flirting with your PDA.",
      "A strike team of mercenary agents broke into your building overnight, and now you keep hearing a beeping sound from beneath the floor.",
      "You lost a bet with a peer, and have to take public transportation for two days.",
      "Enemy agents broke into your facility overnight, and now the bullet holes in your window are letting outside air in.",
      "Mercenary hackers have broken into the security infrastructure, and now your desk clock keeps resetting itself to 13:37.",
      "A strike team of criminal agents sabotaged your research laboratory overnight, and the fire suppression system has ruined your Italian leather chair.",
      "Criminal agents broke into your building overnight, and the new security guards this morning aren't as attractive.",
      "Mercenary agents sabotaged your development facility overnight, and now your facial recognition skillchip is confused by all the hazmat suits.",
      "The corporation has a new CSO, and you're no longer allowed to carry a katana in the office.",
      "You lost a wager with a peer, and now you have a bounty on your head for a day.",
      "Mercenary agents broke into your facility overnight, and the new security guards this morning aren't as attractive.",
      "Your section has a new manager, and your matrix avatar has been reset to its default appearance.",
      "Your division has a new manager, and your matrix avatar has been reset to its default appearance.",
      "The corporation has issued a new style guide, but your jetcopter can't fit any of the approved rocket launchers.",
      "Criminal agents sabotaged your research laboratory overnight, and now everyone has to change their biometrics.",
      "The corporate AI has gone rogue, and now all the vending machines produce the same flavor of soycaff.",
      "Someone has hacked your cyberdoll, and now it keeps pointing at people and whispering \"Bang!\".",
      "The corporation has merged with another, and now your favorite synthcoffee isn't available from the cafe.",
      "Criminal hackers have broken into the corporate network, and now all the vending machines produce the same flavor of coffee.",
      "The corporation has issued a new style guide, but none of the approved autocannon fit your jetcopter.",
      "Someone has hacked your robot geisha, and now it won't stop winking.",
      "The corporation has merged with another, and your cybernetics don't match the new corporate style guide.",
      "Your division has a new manager, and now you have to change your performance-enhancing drug addiction.",
      "You lost a bet with a peer, and have to take public transportation for a day.",
      "Someone has hacked your robot geisha, and now it keeps pointing at people and whispering \"Bang!\".",
      "A strike team of criminal agents broke into your office overnight, and now your polar bear rug smells like cheap cigarette smoke.",
      "A strike team of mercenary agents broke into your office overnight, and now there's blood all over your endangered hardwood desk.",
      "Your section has a new manager, and you're no longer allowed to race drones through the office.",
      "You've been stuck courting a foreign partner all morning, and now your PDA battery is actually dead.",
      "Your division is under new management, and now you have to change your performance-enhancing drug addiction.",
      "The corporate AI has gone rogue, and now none of the elevators go to the floor you want.",
      "You've been moved into a new office, and your new desk isn't as nice as your old endangered hardwood desk.",
      "Mercenary hackers have broken into the security infrastructure, and now your wall clock keeps resetting itself to 13:37.",
      "Mercenary agents broke into your office overnight, and now you need a new assistant to replace the one who was killed.",
      "You've been assigned a cutting-edge new cyberdeck, but it isn't\n      as fashionable as your old one.",
      "Someone has hacked your robot geisha, and now it just stares out the window.",
      "Your division has a new manager, and your matrix avatar has been reset to its default appearance.",
      "The corporation has installed new retina scanners at all the\n      security checkpoints, and now you need to keep at least one\n      organic eye.",
      "You lost a wager with a peer, and have to crash one of your sportscars and video it.",
      "Mercenary hackers have broken into the security infrastructure, and now your PDA won't connect to the office wireless network.",
      "Your section has a new manager, and you're no longer allowed to race drones through the office.",
      "A strike team of mercenary agents broke into your office overnight, and now you need a new assistant to replace the one who was killed.",
      "You've been stuck downsizing a subsidiary all morning, and now you've missed the courier and have to wait until tomorrow for your subscription skillchip.",
      "Criminal deckers have broken into the corporate private matrix, and now all the vending machines produce the same flavor of soycaff.",
      "You lost a wager with a peer, and have to take public transportation for a week.",
      "Enemy agents broke into your office overnight, and now there's a strange clatter in one of the HVAC vents.",
      "Someone has hacked your cyberdoll, and now it's flirting with your PDA.",
      "A strike team of mercenary agents broke into your office overnight, and now your polar bear rug smells like cheap cigarette smoke.",
      "Mercenary hackers have broken into the corporate private matrix, and now everyone has to change their biometrics.",
      "One of the corporation's AIs has gone rogue, and now you keep getting distracted by a strange chemical scent from the HVAC vents.",
      "One of the corporation's AIs has gone rogue, and now it speaks only Walpiri.",
      "You've been stuck courting a foreign partner all morning, and now all the vending machines are out of your favorite coffee.",
      "Criminal agents broke into your building overnight, and now the janitor staff is dead and your trash bin is full.",
      "You've been extracted by a rival corporation, and its armament contract doesn't cover compatible ammo for your SMG.",
      "Your division is under new management, and the thermostat has been set one degree warmer.",
      "The corporation has merged with another, and now you have to have a new sense of loyalty installed.",
      "The corporation has issued a new style guide, but none of the approved case mods fit your favorite cyberdeck.",
      "A strike team of enemy agents broke into your facility overnight, and all of the vending machines were destroyed in the firefight.",
      "A strike team of criminal agents broke into your facility overnight, and now the bullet holes in your window are letting outside air in.",
      "Someone has hacked your robot geisha, and now it's flirting with your PDA.",
      "You've been extracted by a rival corporation, and your new desk isn't as nice as your old endangered hardwood desk."
  );
  return $arr;
}