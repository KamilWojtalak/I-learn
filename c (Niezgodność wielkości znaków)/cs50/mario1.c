#include <cs50.h>
#include <stdio.h>

void mario(int height);

int main(void)
{
    int height;
    do
    {
    height = get_int("Height: ");
    }
    while ( height < 1 || height > 8);

    mario(height);
}

void mario(int height)
{
    int hash = 1;
    int spaces = height - hash;
    for(int i = 0; i < height; i++)
    {
        for(int k = 0; k < spaces; k++) {
            printf(" ");
        }
        for (int l = 0; l < hash; l++)
        {
            printf("#");
        }
        printf("\n");
        hash++;
        spaces--;
    }   
}