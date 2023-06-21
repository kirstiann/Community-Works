#!/usr/bin/perl
 
use strict; 
use warnings;

#Declare variables and constants
my $name = "Community Works";
my $year_founded = 2009; 
my $involvement_mission;
my @community_partners;
my @events;
my %partner_info;

#Initialize variables
$involvement_mission = "To connect passionate people in the community with meaningful involvement opportunities.";
@community_partners = ("CivicConnect", "Community Minded", "Hearts of Community");
@events = qw(Downtown Street Fair Neighborhood Block Party International Festival);

%partner_info = {
    'CivicConnect' => {
       'description' => 'Connects people with opportunities to serve their communities',
       'website' => 'http://www.civicconnect.org/'
    },
    'Community Minded' => {
       'description' => 'Organizes and motivates the community towards positive social change',
       'website' => 'http://www.communityminded.org/'
    },
    'Hearts of Community' => {
       'description' => 'Encourages the spirit of community through volunteerism',
       'website' => 'http://www.heartsofcommunity.org/'
    }
};

#Display information to the user
print "Welcome to $name!\n";
print "We are a non-profit organization founded in $year_founded.\n";
print "Our mission is $involvement_mission\n\n";
print "We have a network of community partners:\n";

#Loop through each partner, displaying their information
foreach my $partner (@community_partners) {
    print "$partner: $partner_info{$partner}{description} - $partner_info{$partner}{website}\n";
}

print "\nWe host several events throughout the year:\n";

#Loop through each event, displaying information
foreach my $event (@events) {
    print "$event\n";
}

print "\nThank you for your interest in $name.\n";