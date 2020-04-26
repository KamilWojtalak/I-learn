#include<stdio.h>
#include<cs50.h>
#include<math.h>

int main(void)
{
    float change;
    do
    {
    change = get_float("How much change I\'m owed to you?\n");
    }
    while (change < 0);

    float quarters = 25;
    float dimes = 10;
    float nickels = 5;
    float pennies = 1;
    change = round(change * 100);
    int counter = 0;
    
    while(change > 0)
    {
        if (change >= quarters) {
            change -= quarters;
            counter++;
        } else if (change >= dimes) {
            change -= dimes;
            counter++;
        }
        else if (change >= nickels) {
            change -= nickels;
            counter++;
        }
        else if (change >= pennies) {
            change -= pennies;
            counter++;
        }
        
    }
    printf("%i\n", counter);
    
}


