#include "mainwindow.h"

#include <QApplication>
#include <QFrame>
#include <QPushButton>
#include <QVBoxLayout>
//added
#include<QFile>
#include<QDebug>
int main(int argc, char *argv[])
{
    QApplication a(argc, argv);
    MainWindow w;
    QFile file(":/font/Kabel Book BT_0.ttf");
    if (file.exists())
    {
        qDebug() << "Font file exists.";
        QFont serif("Kabel Book BT", 16, QFont::Bold); // Use the font family name instead of the file path
        w.setFont(serif);
    }
    else
    {
        qDebug() << "Font file not found.";
    }

    w.show();
    return a.exec();







}
