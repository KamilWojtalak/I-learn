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
    for(int i = 0; i < height; i++)
    {
        for (int j = 0; j < height + 1; j++)
        {
            if (j < height - i) {
                printf(" ");
            }
            else {
                printf("#");
            }
        }
        printf("\n");
    }   
}
