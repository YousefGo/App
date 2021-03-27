int buzzer=11;
int forcePin=A1;
int Forcevalue=0;
void setup()
{
pinMode(forcePin,INPUT);
pinMode (buzzer, OUTPUT); 
 Serial.begin (9600);
}
void loop ()
{
Forcevalue = analogRead(forcePin);
  Serial.println(Forcevalue);
  noTone(buzzer);
  tone(buzzer,Forcevalue);
}
